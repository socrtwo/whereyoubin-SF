// Travel Log standalone — offline shell.
// The whole app is static; cache everything on first visit and serve
// cache-first thereafter so subsequent launches work with no network.

const VERSION = 'travellog-standalone-v1';
const SHELL = [
    './',
    './index.html',
    './app.js',
    './maps-data.js',
    './styles.css',
    './manifest.webmanifest',
    './icons/icon.svg',
    './icons/icon-192.png',
    './icons/icon-512.png',
];

self.addEventListener('install', (e) => {
    e.waitUntil(caches.open(VERSION).then((c) => c.addAll(SHELL)).catch(() => {}));
    self.skipWaiting();
});

self.addEventListener('activate', (e) => {
    e.waitUntil(caches.keys().then((keys) =>
        Promise.all(keys.filter(k => k !== VERSION).map(k => caches.delete(k)))));
    self.clients.claim();
});

self.addEventListener('fetch', (e) => {
    const req = e.request;
    if (req.method !== 'GET') return;
    e.respondWith(
        caches.match(req).then((hit) => hit || fetch(req).then((res) => {
            const copy = res.clone();
            caches.open(VERSION).then((c) => c.put(req, copy)).catch(() => {});
            return res;
        }).catch(() => hit))
    );
});
