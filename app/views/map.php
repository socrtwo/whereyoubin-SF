<?php
/** @var array $trips */
use TravelLog\View;
?>
<section class="map-wrap">
    <h1>Your map</h1>
    <p class="muted">Pins show trips with coordinates. Add latitude/longitude to a trip to make it appear here.</p>
    <div id="map" style="height:70vh; width:100%; border-radius:18px; overflow:hidden;"></div>
</section>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
      integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="anonymous">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="anonymous"></script>
<script>
(function () {
    const trips = <?= json_encode(array_values(array_filter($trips, static fn($t) => $t['latitude'] !== null && $t['longitude'] !== null)), JSON_UNESCAPED_UNICODE) ?>;
    const map = L.map('map', { worldCopyJump: true }).setView([20, 0], 2);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const group = L.featureGroup().addTo(map);
    for (const t of trips) {
        const m = L.marker([Number(t.latitude), Number(t.longitude)]).addTo(group);
        const esc = (s) => String(s ?? '').replace(/[&<>"']/g, c => ({ '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;' }[c]));
        m.bindPopup(`<strong>${esc(t.title)}</strong><br>${esc(t.location || '')}<br><small>${esc(t.visited_on || '')}</small>`);
    }
    if (trips.length) {
        map.fitBounds(group.getBounds().pad(0.2));
    }
})();
</script>
