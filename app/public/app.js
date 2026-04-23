// Travel Log — progressive enhancements.

// Theme toggle: cycles auto → light → dark → auto
(function () {
    const root = document.documentElement;
    const key = 'travellog.theme';
    const saved = localStorage.getItem(key);
    if (saved) root.setAttribute('data-theme', saved);

    const btn = document.querySelector('.theme-toggle');
    if (btn) {
        btn.addEventListener('click', () => {
            const now = root.getAttribute('data-theme') || 'auto';
            const next = now === 'auto' ? 'light' : now === 'light' ? 'dark' : 'auto';
            root.setAttribute('data-theme', next);
            localStorage.setItem(key, next);
        });
    }
})();

// Geolocation assist on the form
(function () {
    const btn = document.getElementById('geo-btn');
    if (!btn || !navigator.geolocation) return;
    btn.addEventListener('click', () => {
        btn.disabled = true;
        btn.textContent = 'Locating…';
        navigator.geolocation.getCurrentPosition((pos) => {
            const lat = document.querySelector('input[name="latitude"]');
            const lng = document.querySelector('input[name="longitude"]');
            if (lat) lat.value = pos.coords.latitude.toFixed(6);
            if (lng) lng.value = pos.coords.longitude.toFixed(6);
            btn.disabled = false;
            btn.textContent = 'Use my location';
        }, () => {
            btn.disabled = false;
            btn.textContent = 'Location unavailable';
        }, { enableHighAccuracy: true, timeout: 7000 });
    });
})();

// Service worker registration (makes the app installable + offline-capable
// on Windows / macOS / Linux / Android / iOS / Web)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        const base = document.querySelector('link[rel="manifest"]').getAttribute('href').replace('/manifest.webmanifest', '');
        navigator.serviceWorker.register((base || '') + '/sw.js', { scope: (base || '') + '/' })
            .catch(() => { /* non-fatal */ });
    });
}
