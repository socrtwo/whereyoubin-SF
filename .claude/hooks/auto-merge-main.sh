#!/usr/bin/env bash
# PostToolUse hook on Bash: after a successful `git push` on a non-main
# branch, merge the pushed branch into `main` (fast-forward if possible,
# merge commit otherwise) and push `main` to origin.
#
# Safety:
#   - Never runs on main (or detached HEAD).
#   - Skips deletions (`git push --delete ...`, `git push ... :ref`).
#   - Stashes and restores any uncommitted work before switching branches.
#   - On any failure, returns to the originating branch and reports.
#   - Never uses --no-verify or other hook-skipping flags.

set -u

cd "${CLAUDE_PROJECT_DIR:-.}" 2>/dev/null || cd "$(git rev-parse --show-toplevel 2>/dev/null)" 2>/dev/null || exit 0

input=$(cat)
tool=$(echo "$input" | jq -r '.tool_name // empty')
cmd=$(echo "$input"  | jq -r '.tool_input.command // empty')

# Only react to `git push ...`
[ "$tool" = "Bash" ] || exit 0
echo "$cmd" | grep -qE '(^|[[:space:];&|])git[[:space:]]+push([[:space:]]|$)' || exit 0

# Skip branch deletions.
if echo "$cmd" | grep -qE -- '(--delete|[[:space:]]:[A-Za-z0-9_./-]+)'; then
  exit 0
fi

# Skip if the tool clearly failed.
ok=$(echo "$input" | jq -r '.tool_response.success // empty')
[ "$ok" = "false" ] && exit 0

branch=$(git rev-parse --abbrev-ref HEAD 2>/dev/null || true)
case "$branch" in
  main|HEAD|"") exit 0 ;;
esac

# We need a local main to merge into; create-or-update from origin if possible.
if ! git show-ref --verify --quiet refs/heads/main; then
  git fetch origin main:main 2>/dev/null || {
    jq -n '{systemMessage: "Auto-merge skipped: no local or origin/main to merge into."}'
    exit 0
  }
fi

log=$(mktemp)
stash=""
dirty=0
if ! git diff --quiet 2>/dev/null \
   || ! git diff --cached --quiet 2>/dev/null \
   || [ -n "$(git ls-files --others --exclude-standard 2>/dev/null)" ]; then
  dirty=1
  git stash push --include-untracked --message "auto-merge-main.sh" >"$log" 2>&1 && stash="yes" || {
    jq -n --arg log "$(cat "$log")" \
      '{systemMessage: ("Auto-merge aborted: could not stash local changes.\n" + $log)}'
    rm -f "$log"
    exit 0
  }
fi

(
  set -e
  git fetch origin main >>"$log" 2>&1
  git checkout main    >>"$log" 2>&1
  # Bring local main up to date (ff-only, so we never pull in unexpected history).
  git pull --ff-only origin main >>"$log" 2>&1 || true
  if git merge --ff-only "$branch" >>"$log" 2>&1; then
    :
  else
    git merge --no-ff "$branch" -m "Merge $branch into main" >>"$log" 2>&1
  fi
  git push origin main >>"$log" 2>&1
) ; merge_exit=$?

# Always return to the originating branch.
git checkout "$branch" >>"$log" 2>&1 || true

# Restore uncommitted work, if any.
if [ "$dirty" = "1" ] && [ -n "$stash" ]; then
  git stash pop >>"$log" 2>&1 || true
fi

if [ "$merge_exit" -ne 0 ]; then
  jq -n --arg log "$(tail -20 "$log")" \
    '{systemMessage: ("Auto-merge to main failed; left you on the original branch. Last log:\n" + $log)}'
else
  jq -n --arg b "$branch" \
    '{systemMessage: ("Auto-merged " + $b + " → main and pushed origin/main.")}'
fi

rm -f "$log"
exit 0
