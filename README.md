# Where In the World Have You Been?

A PHP travel project with **two** tightly-integrated parts:

1. **Classic clickable maps** (World, US, Canada, China, India, Africa, Europe) that color-code the countries you've visited and generate a shareable poster.
2. **A modern Progressive Web App travel log** (`app/`) where you record every trip — photos, notes, ratings, coordinates — and relive them on an interactive world map.

Both share a PHP 8.2+ codebase that's been deliberately hardened to survive future PHP updates.

---

## Highlights

- 📱 **Install natively on Windows, macOS, Linux, Android, iOS, and the Web** from one codebase (PWA).
- 🧳 **Full travel log**: trips, photos, ratings, notes, dates, coordinates, country detection, CSV/JSON export.
- 🗺️ **Interactive world map** of your trips (Leaflet + OpenStreetMap).
- 📊 **Stats dashboard**: countries visited, trips per year, top countries, average rating.
- 🎨 **Beautiful, responsive UI** with automatic dark mode.
- 🔒 **Break-immune PHP 8.4 code** — no `mysql_*`, `eregi`, `magic_quotes`, short tags, or other removed APIs.
- 💾 **Zero-config SQLite** by default; optional MySQL for shared hosting.
- 🧪 **CI tests PHP 8.2 / 8.3 / 8.4** on every push.

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
