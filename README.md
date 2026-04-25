<!--MODERNIZED:v1-->
# Whereyoubin

> Migrated from SourceForge via SF2GH Migrator

[![Live page](https://img.shields.io/badge/live-page-ff2e93?style=for-the-badge)](https://socrtwo.github.io/whereyoubin-SF/)
[![Releases](https://img.shields.io/github/v/release/socrtwo/whereyoubin-SF?style=for-the-badge&color=7c3aed)](https://github.com/socrtwo/whereyoubin-SF/releases)
[![License](https://img.shields.io/github/license/socrtwo/whereyoubin-SF?style=for-the-badge&color=22d3ee)](https://github.com/socrtwo/whereyoubin-SF/blob/main/LICENSE)
[![Last commit](https://img.shields.io/github/last-commit/socrtwo/whereyoubin-SF?style=for-the-badge&color=34d399)](https://github.com/socrtwo/whereyoubin-SF/commits)

🌐 **Live:** https://socrtwo.github.io/whereyoubin-SF/  
📦 **Downloads:** [Releases](https://github.com/socrtwo/whereyoubin-SF/releases)  
📂 **Source:** [socrtwo/whereyoubin-SF](https://github.com/socrtwo/whereyoubin-SF)

---

A PHP travel project with **two** tightly-integrated parts:

1. **Classic clickable maps** (World, US, Canada, China, India, Africa, Europe) that color-code the countries you've visited and generate a shareable poster.
2. **A modern Progressive Web App travel log** (`app/`) where you record every trip — photos, notes, ratings, coordinates — and relive them on an interactive world map.

Both share a PHP 8.2+ codebase that's been deliberately hardened to survive future PHP updates.

---

## Highlights

- 📱 **Install natively on Windows, macOS, Linux, Android, iOS, and the Web** from one codebase (PWA).
- 🌍 **Fourteen regional maps** you can tick off: US states, Europe, Canadian provinces, Africa, Russian federal subjects, Chinese provinces, Indian states & UTs, South America, Caribbean, Asia, Australian states, Pacific islands, Commonwealth of Nations, and UK counties/nations.
- 👤 **Accounts that follow you** — email + password sign-in so picks survive cleared cookies, new browsers/computers/phones, and IP changes. Guest picks are auto-claimed on signup.
- 🧳 **Full travel log**: trips, photos, ratings, notes, dates, coordinates, country detection, CSV/JSON export.
- 🗺️ **Interactive world map** of your trips (Leaflet + OpenStreetMap).
- 📊 **Stats dashboard**: per-map progress bars, trips per year, top countries, average rating.
- 🎨 **Beautiful, responsive UI** with automatic dark mode.
- 🔒 **Break-immune PHP 8.4 code** — no `mysql_*`, `eregi`, `magic_quotes`, short tags, or other removed APIs.
- 💾 **Zero-config SQLite** by default; optional MySQL for shared hosting.
- 🧪 **CI tests PHP 8.2 / 8.3 / 8.4** on every push.

## Persistence across devices

Every checked-off place and every trip is stored against your account. Sessions
live in the `user_sessions` table, identified by a 256-bit random cookie token:

| Scenario                                           | Still there after sign-in? |
| -------------------------------------------------- | -------------------------- |
| Cleared browser cookies / cache                    | ✅                         |
| New browser on the same computer                   | ✅                         |
| Brand-new computer or phone                        | ✅                         |
| ISP rotated your IP address                        | ✅ (sessions never bind IP)|
| Years between visits                               | ✅ (data kept forever)     |
| You were a guest, then signed up                   | ✅ (guest picks auto-claimed) |

Passwords are hashed with `PASSWORD_DEFAULT` (bcrypt today, self-upgrades if PHP
picks a stronger algorithm later). All mutations are CSRF-protected.

## Included regional maps

| Map                | Subdivisions                           | Count |
| ------------------ | -------------------------------------- | ----- |
| United States      | States + DC                            | 51    |
| Europe             | Sovereign countries                    | 45    |
| Canada             | Provinces & territories                | 13    |
| Africa             | Sovereign countries                    | 54    |
| Russia             | Federal subjects                       | 83    |
| China              | Provinces, regions & SARs              | 33    |
| India              | States & Union Territories             | 36    |
| South America      | Countries & territories                | 14    |
| Caribbean          | Countries, territories & possessions   | 28    |
| Asia               | Sovereign countries (incl. SARs)       | 51    |
| Australia          | States & territories                   | 8     |
| Pacific Islands    | Countries, territories & possessions   | 25    |
| Commonwealth       | All 56 member states                   | 56    |
| United Kingdom     | Nations, regions & counties/council areas | 124 |

## Screenshots

Visit the [SourceForge project page](https://sourceforge.net/projects/whereyoubin/) for screenshots of the classic map tool.

---

## Quick start

```bash
# Run the travel log app (zero config, SQLite, auto-creates schema)
php -S 127.0.0.1:8000 -t app/public app/public/index.php

# Or use the composer script
composer serve
```

Then open <http://127.0.0.1:8000>. On first visit your browser will offer to
install it as an app.

To also run the classic map tool, serve the repo root:

```bash
php -S 127.0.0.1:8001
# Then open http://127.0.0.1:8001
```

## System requirements

- **PHP 8.2, 8.3, or 8.4** (tested in CI)
- Extensions: `pdo`, `pdo_sqlite` *or* `pdo_mysql`, `mbstring`, `json`
- Optional: `gd` + `curl` for the classic poster/map tools

## Standalone client-side build (work in progress)

`app/standalone/` holds the offline-first client-side build that ships
inside the desktop (Windows/macOS/Linux) and mobile (Android/iOS)
wrappers. Unlike the server edition it does **not** require PHP or a
hosted URL — all 14 maps are baked into `maps-data.js` and user state
lives in the browser's IndexedDB. Current contents:

- `maps-data.js` — auto-generated from `app/src/Maps.php` (623 places
  across 14 regional maps; regenerate with the one-liner at the top of
  the file).
- `index.html`, `styles.css`, `icons/` — the shell.
- `app.js` / `sw.js` / `manifest.webmanifest` — *not yet written*;
  next step is the IndexedDB-backed SPA logic and the offline service
  worker.

The web release keeps using `install.php`, which already asks the
operator for a base URL during install.

The router in `app/src/Router.php` only derives a mount-prefix from
`SCRIPT_NAME` when that variable actually points at a `.php` file — a
necessary guard because PHP 8.2 / 8.3's built-in server sets
`SCRIPT_NAME` to the request URI itself for URLs with non-default
extensions (`.json`, etc.), which would otherwise strip the prefix
and 404 valid API routes.

## Repository automation

Two rules are always true here, enforced by a Claude Code harness hook,
a GitHub Action, and a `CLAUDE.md` policy (details in [`CLAUDE.md`](CLAUDE.md)):

- **`README.md` stays in sync with code.** Every turn that changes a
  non-ignorable file must also update `README.md`. The local Stop hook
  `.claude/hooks/readme-freshness.sh` blocks the turn otherwise.
- **Feature branches always land on `main`.** Whenever a non-main branch
  is pushed, it is merged into `main` and `main` is pushed to origin.
  Runs locally via the PostToolUse hook `.claude/hooks/auto-merge-main.sh`
  and server-side via `.github/workflows/auto-merge-to-main.yml` — either
  one is sufficient, both running is harmless.

Skip the README sync for changes confined to: `.claude/`, `.github/`,
lockfiles, `.gitignore`/`.gitattributes`, `CLAUDE.md`, `app/data/`, or
`app/public/uploads/`. Edit the ignore list in the hook if another
genuinely-README-irrelevant path appears.

## Cutting a release

The [`release.yml`](.github/workflows/release.yml) workflow builds signed/unsigned
installers for every target and attaches them to a GitHub Release:

| Target     | Runner            | Built with              | Artifact                 |
| ---------- | ----------------- | ----------------------- | ------------------------ |
| Web        | `ubuntu-latest`   | `zip`                   | `travellog-web-*.zip`    |
| Windows    | `windows-latest`  | Pake (Tauri)            | `*.msi` / `*.exe`        |
| macOS      | `macos-latest` ×2 | Pake — x64 + arm64      | `*-x86_64-apple-darwin.dmg`, `*-aarch64-apple-darwin.dmg` |
| Linux      | `ubuntu-latest`   | Pake                    | `*.AppImage` + `*.deb`   |
| Android    | `ubuntu-latest`   | Bubblewrap (TWA)        | `*.apk` (+ `*.aab` for Play) |
| iOS        | `macos-latest`    | PWABuilder iOS template | `travellog-ios-xcode-*.zip` (build locally in Xcode) |

Trigger it either way:

```bash
# Tag a release (creates a GitHub Release automatically)
git tag v1.0.0 && git push origin v1.0.0

# Or run it manually from GitHub → Actions → "Release" → Run workflow
# (lets you override APP_URL without tagging)
```

Set the repository variable `APP_URL` (Settings → Secrets & variables →
Actions → Variables) to the hosted URL of your PWA — the desktop and
mobile wrappers load that URL at runtime. The web zip always contains
the full PHP source regardless.

## Two product lines

Travel Log ships in two flavours from the same repo — pick whichever
matches how you want to use it:

### Web (hosted, multi-device)

`app/public/` is a PHP 8.2+ backend with accounts. Data lives on your
server, so picks follow you across every browser and device when you
sign in. Install flow:

1. Unzip the web release bundle on a PHP host.
2. Open `install.php` in a browser. **The installer asks for your web
   address** (and optional MySQL credentials — SQLite is the default),
   then seeds the database.
3. Share the URL with yourself on every device you own.

### Desktop & mobile (on-device, offline-first)

`app/standalone/` is a fully client-side version — no PHP, no account,
no server. All 14 regional maps are baked into the bundle; trips and
place-visits are stored in **IndexedDB on the device**. This is what
the Windows / macOS / Linux / Android / iOS release artifacts wrap:

- Published to GitHub Pages by the `pages` job in `release.yml`.
- Loaded once from that URL on first launch, then cached by a service
  worker so every subsequent launch works with no network.
- No "ask for URL" prompt on launch — the app runs the moment you open
  it and is ready for all the maps you've worked on.

You can also open `app/standalone/index.html` locally to try it in any
modern browser — double-click the file or serve the folder with
`python3 -m http.server` / `php -S 127.0.0.1:8000 -t app/standalone`.

## Installing the app (all platforms)

The app is a Progressive Web App, installable from a single URL:

| Platform       | How to install                                                        |
| -------------- | --------------------------------------------------------------------- |
| **Windows**    | Edge / Chrome → address-bar install icon                              |
| **macOS**      | Safari 17+: *File → Add to Dock*, or Chrome install icon              |
| **Linux**      | Chrome / Chromium / Edge install icon (adds a `.desktop` entry)       |
| **Android**    | Chrome / Edge: *Install app* menu                                     |
| **iOS/iPadOS** | Safari: *Share → Add to Home Screen*                                  |
| **Web**        | Just open the URL — fully functional without installing               |

Once installed it runs in its own window and caches for offline use.

> Need signed `.exe`/`.dmg`/`.AppImage`/`.apk`/`.ipa` bundles? See
> [`app/native/README.md`](app/native/README.md) for one-line wrapping with
> Pake, Bubblewrap, or PWABuilder.

## Configuration

### Travel log app (`app/`)

- **Default**: SQLite at `app/data/travellog.sqlite`. Nothing to configure.
- **MySQL**: export `TRAVELLOG_DRIVER=mysql` and `require` the legacy
  `config.php` (or define the `MYSQL_*` constants yourself) before hitting
  `app/public/index.php`.

### Classic map tool

1. Copy `config.example.php` to `config.php` and fill in credentials.
2. Visit `/install.php` once to create the database tables.

## PHP-update break-immunity

Removed/deprecated APIs have been replaced with modern, stable equivalents:

| Old API (pre-PHP-7/8)          | Modern replacement                          |
| ------------------------------ | ------------------------------------------- |
| `mysql_connect` / `mysql_query`| `PDO` with prepared statements              |
| `eregi` / `ereg`               | `preg_match` / `filter_var`                 |
| `split()`                      | `explode` / `preg_split`                    |
| `get_magic_quotes_gpc()`       | Removed — no-op                             |
| `<?` short tags                | `<?php`                                     |
| String-concatenation SQL       | Parameterised queries                       |
| `crypt()` for ID generation    | `random_bytes` / `hash('sha256', …)`        |
| `imagepsloadfont`, `each()`    | Not used                                    |

The installer now writes `config.php` with `var_export`, so passwords containing
quotes, backslashes, or Unicode can never corrupt the config file. CI matrix-lints
all files under PHP 8.2 / 8.3 / 8.4 and smoke-tests every route.

## Project layout

```
.
├── app/                  ← modern travel log
│   ├── public/           ← document root (front controller, assets, PWA manifest, SW)
│   ├── src/              ← PSR-4 autoloaded classes (Database, Trip, Router, View, Countries)
│   ├── views/            ← PHP view templates (layout, index, form, map, stats)
│   ├── data/             ← SQLite database (git-ignored)
│   └── native/           ← how to wrap as .exe / .dmg / .AppImage / .apk / .ipa
├── index.php             ← legacy map tool (World / Africa / Canada / …)
├── header.php footer.php ← legacy map tool template
├── include.php           ← legacy short-URL + helpers (modernised for PHP 8.x)
├── install.php           ← legacy installer (modernised)
├── maps/ images/ css/    ← legacy static assets
└── composer.json         ← PSR-4 autoload + dev scripts
```

## Origin

This project was originally hosted on SourceForge and migrated to GitHub.

- **SourceForge:** [whereyoubin](https://sourceforge.net/projects/whereyoubin/)
- **Migrated with:** [SF2GH Migrator](https://github.com/socrtwo/sf-to-github)

## License

MIT — see [LICENSE](LICENSE).

---

## 📜 SourceForge heritage

This project originated on **SourceForge** before being migrated to GitHub. The legacy SourceForge entry, if still available, can be searched at:

🔗 https://sourceforge.net/projects/whereyoubin/

The repository here at `socrtwo/whereyoubin-SF` is the canonical, actively-maintained home. All future updates, issue tracking, and releases happen on GitHub.

## 🛠️ Contributing

Issues and pull requests are welcome at [https://github.com/socrtwo/whereyoubin-SF/issues](https://github.com/socrtwo/whereyoubin-SF/issues).

## 📝 License

See the [LICENSE](https://github.com/socrtwo/whereyoubin-SF/blob/main/LICENSE) file in this repository. If no license file is present, the project is shared as-is for reference and personal use; please contact the maintainer for other use cases.

---

*Maintained by [@socrtwo](https://github.com/socrtwo)*