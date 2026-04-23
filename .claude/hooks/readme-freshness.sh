#!/usr/bin/env bash
# Stop hook: refuse to stop if the repo has file changes that aren't
# reflected in README.md. Claude will be told to update the README and
# continue.
#
# Scope: changes since the branch diverged from origin/main (or HEAD~1 if
# there's no remote main yet) plus anything uncommitted.
#
# Bail gracefully (exit 0, no block) when this isn't a git repo, when
# there are no changes at all, or when every change is in an ignorable
# path. Ignorable paths are things that genuinely don't belong in the
# README: lockfiles, .claude/, .github/, generated data, uploads.

set -u

cd "${CLAUDE_PROJECT_DIR:-.}" 2>/dev/null || cd "$(git rev-parse --show-toplevel 2>/dev/null)" 2>/dev/null || exit 0

git rev-parse HEAD >/dev/null 2>&1 || exit 0

# Find a comparison base.
base=""
if git rev-parse --verify origin/main >/dev/null 2>&1; then
  base=$(git merge-base HEAD origin/main 2>/dev/null || true)
fi
if [ -z "$base" ] && git rev-parse HEAD~1 >/dev/null 2>&1; then
  base=$(git rev-parse HEAD~1)
fi
[ -z "$base" ] && exit 0   # fresh repo — nothing to compare

committed=$(git diff --name-only "$base" HEAD 2>/dev/null || true)
unstaged=$(git diff --name-only 2>/dev/null || true)
staged=$(git diff --name-only --staged 2>/dev/null || true)
untracked=$(git ls-files --others --exclude-standard 2>/dev/null || true)

all_changes=$(printf '%s\n%s\n%s\n%s\n' "$committed" "$unstaged" "$staged" "$untracked" \
              | sort -u | sed '/^$/d')

[ -z "$all_changes" ] && exit 0

# Paths whose changes don't imply a README update.
ignore_re='^(\.claude/|\.github/|\.gitignore$|\.gitattributes$|composer\.lock$|package-lock\.json$|yarn\.lock$|pnpm-lock\.yaml$|app/data/|app/public/uploads/|CLAUDE\.md$)'

needs_readme=$(echo "$all_changes" | grep -Ev "$ignore_re" || true)
[ -z "$needs_readme" ] && exit 0

# If README itself is among the changes, we're good.
if echo "$all_changes" | grep -qx 'README.md'; then
  exit 0
fi

# README is stale — ask Claude to update it.
files_preview=$(echo "$needs_readme" | head -10 | sed 's/^/  - /')
jq -n \
  --arg msg "README.md is stale. These files changed without a matching README update:
$files_preview

Please update README.md to describe the changes (or, if a path truly never affects the README, add it to the ignore_re in .claude/hooks/readme-freshness.sh)." \
  '{decision: "block", reason: $msg}'
