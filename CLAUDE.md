# Project policy for Claude

This project has **two standing automation rules** that Claude must follow.
They are enforced by harness hooks (`.claude/settings.json`) and a
GitHub Action (`.github/workflows/auto-merge-to-main.yml`), so forgetting
them is safe — they will self-correct. Still, respect them from the start
so the hooks never have to fire.

## 1. Always keep `README.md` in sync with changes

Whenever a turn modifies a file in this repo, update `README.md` in the
same turn to describe what changed. The Stop hook
(`.claude/hooks/readme-freshness.sh`) will block the turn if code
changed without a matching README edit.

Exceptions (no README update needed) are files under:

- `.claude/`
- `.github/`
- `.gitignore`, `.gitattributes`, `CLAUDE.md`
- Lockfiles: `composer.lock`, `package-lock.json`, `yarn.lock`, `pnpm-lock.yaml`
- Generated / runtime-only paths: `app/data/`, `app/public/uploads/`

Add to that list in `.claude/hooks/readme-freshness.sh` if a new
genuinely-README-irrelevant path shows up.

## 2. Always land work on `main`

After pushing a non-`main` branch, fast-forward (or merge-commit) it
into `main` and push `main` to origin. Two mechanisms cover this:

- **Local**: PostToolUse hook `.claude/hooks/auto-merge-main.sh` runs on
  every successful `git push` from a non-main branch.
- **Server**: `.github/workflows/auto-merge-to-main.yml` runs on every
  non-main push, fetches `main`, merges, and pushes.

Either mechanism is sufficient; both running is harmless (the second
becomes a no-op).

If you prefer to do it manually in-turn (recommended, so the user sees
the merge in the same transcript):

```bash
git push -u origin <branch>
git checkout main
git pull --ff-only origin main
git merge --ff-only <branch> || git merge --no-ff <branch> -m "Merge <branch> into main"
git push origin main
git checkout <branch>
```

**Never** pass `--no-verify`, `--no-gpg-sign`, or any flag that skips
repo policy — the hooks and action won't either.

## Why both hooks and CLAUDE.md?

- CLAUDE.md → Claude reads it each turn, so the policy is in-context
  and Claude can follow it proactively.
- Hooks → run at harness level whether or not Claude remembers. They
  fix / enforce silently.
- GitHub Action → runs on the server, so even a direct `git push` from
  a laptop (bypassing Claude entirely) still lands on `main`.
