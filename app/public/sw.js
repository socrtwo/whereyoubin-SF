// Travel Log service worker — offline shell for the installed app.
const VERSION = 'travellog-v1';
const SHELL = [
    './',
    './styles.css',
    './app.js',
    './manifest.webmanifest',
    './icons/icon.svg',
];

self.addEventListener('install', (e) => {
    e.waitUntil(caches.open(VERSION).then((c) => c.addAll(SHELL)).catch(() => {}));
    self.skipWaiting();
});

self.addEventListener('activate', (e) => {
    e.waitUntil(
        caches.keys().then((keys) => Promise.all(keys.filter(k => k !== VERSION).map(k => caches.delete(k))))
    );
    self.clients.claim();
});

self.addEventListener('fetch', (e) => {
    const req = e.request;
    if (req.method !== 'GET') return;

    // Network-first for navigations (so trips stay fresh), fall back to cache.
    if (req.mode === 'navigate') {
        e.respondWith(
            fetch(req).then((res) => {
                const copy = res.clone();
                caches.open(VERSION).then((c) => c.put(req, copy)).catch(() => {});
                return res;
            }).catch(() => caches.match(req).then((r) => r || caches.match('./')))
        );
        return;
    }

    // Cache-first for static shell assets.
    e.respondWith(
        caches.match(req).then((hit) => hit || fetch(req).then((res) => {
            const copy = res.clone();
            caches.open(VERSION).then((c) => c.put(req, copy)).catch(() => {});
            return res;
        }).catch(() => hit))
    );
});
