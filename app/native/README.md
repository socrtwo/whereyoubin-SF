# Native Packaging

The Travel Log app ships as a **Progressive Web App (PWA)** that installs
natively on every major platform from a single codebase:

| Platform     | Install method                                                         |
| ------------ | ---------------------------------------------------------------------- |
| **Windows**  | Edge / Chrome address-bar install icon → "Install Travel Log"          |
| **macOS**    | Safari 17+ *File → Add to Dock*, or Chrome install icon                |
| **Linux**    | Chrome / Chromium / Edge install icon (creates a desktop entry)        |
| **Android**  | Chrome / Edge *Install app* menu (adds to home screen + app drawer)    |
| **iOS**      | Safari *Share → Add to Home Screen*                                    |
| **Web**      | Any modern browser — no install required                               |

Once installed, the app runs in its own window, uses the device's storage for
offline caching (see `sw.js`), integrates with the OS share sheet, and appears
in launchers/app drawers — indistinguishable from a native app for logging use.

## Optional: Wrap as true native binaries

If you also want signed `.exe` / `.dmg` / `.AppImage` / `.apk` / `.ipa`
artifacts, wrap the hosted PWA. No code changes needed:

### Desktop (Windows, macOS, Linux)

Use [Pake](https://github.com/tw93/Pake) — produces a single-binary Tauri/Rust
wrapper under 5 MB:

```bash
npm install -g pake-cli
pake https://your-domain.example/app/ --name "Travel Log" --width 1200 --height 800
```

This yields `TravelLog.exe`, `TravelLog.dmg`, and `TravelLog.AppImage`.

Alternative: [Tauri](https://tauri.app), [Electron](https://electronjs.org),
or [PWABuilder](https://www.pwabuilder.com) (generates MSIX for the Microsoft
Store directly from the manifest).

### Android

[Bubblewrap](https://github.com/GoogleChromeLabs/bubblewrap) turns the PWA
into a [Trusted Web Activity](https://developer.chrome.com/docs/android/trusted-web-activity/):

```bash
npm install -g @bubblewrap/cli
bubblewrap init --manifest=https://your-domain.example/app/manifest.webmanifest
bubblewrap build
```

Produces a signed `.aab` ready for Google Play.

### iOS

[PWABuilder iOS](https://github.com/pwa-builder/pwabuilder-ios) generates an
Xcode project that wraps the PWA for App Store distribution.

All of these wrappers load the same URL / the same HTML, CSS, and PHP backend,
so the single codebase in `app/` powers every platform.
