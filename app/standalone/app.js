// Travel Log — standalone, fully client-side.
// Runs offline with zero backend. Data lives in IndexedDB on this device.

import { MAPS } from './maps-data.js';

// ---------------------------------------------------------------------------
// IndexedDB wrapper
// ---------------------------------------------------------------------------

const DB_NAME = 'travellog';
const DB_VERSION = 1;

function openDB() {
    return new Promise((resolve, reject) => {
        const req = indexedDB.open(DB_NAME, DB_VERSION);
        req.onupgradeneeded = () => {
            const db = req.result;
            if (!db.objectStoreNames.contains('trips')) {
                const s = db.createObjectStore('trips', { keyPath: 'id', autoIncrement: true });
                s.createIndex('visited_on', 'visited_on');
                s.createIndex('country',    'country');
            }
            if (!db.objectStoreNames.contains('visits')) {
                const s = db.createObjectStore('visits', { keyPath: 'key' });
                s.createIndex('map_key', 'map_key');
            }
        };
        req.onsuccess = () => resolve(req.result);
        req.onerror   = () => reject(req.error);
    });
}

let _db;
async function db() { return _db ||= await openDB(); }

function tx(store, mode = 'readonly') {
    return db().then((d) => d.transaction(store, mode).objectStore(store));
}

function idbReq(request) {
    return new Promise((resolve, reject) => {
        request.onsuccess = () => resolve(request.result);
        request.onerror   = () => reject(request.error);
    });
}

// ---------- Trips ----------
const Trips = {
    async all() {
        const s = await tx('trips');
        const all = await idbReq(s.getAll());
        return all.sort((a, b) => {
            const da = a.visited_on || '', db_ = b.visited_on || '';
            if (da !== db_) return db_.localeCompare(da);
            return (b.id || 0) - (a.id || 0);
        });
    },
    async get(id)    { return idbReq((await tx('trips')).get(Number(id))); },
    async create(data) {
        const s = await tx('trips', 'readwrite');
        data.created_at = new Date().toISOString();
        return idbReq(s.add(data));
    },
    async update(id, data) {
        const s = await tx('trips', 'readwrite');
        const existing = await idbReq(s.get(Number(id))) || {};
        const next = { ...existing, ...data, id: Number(id) };
        return idbReq(s.put(next));
    },
    async remove(id) { return idbReq((await tx('trips', 'readwrite')).delete(Number(id))); },
};

// ---------- Visits ----------
const Visits = {
    key(mapKey, code) { return `${mapKey}:${code}`; },
    async forMap(mapKey) {
        const s  = await tx('visits');
        const ix = s.index('map_key');
        const rows = await idbReq(ix.getAll(IDBKeyRange.only(mapKey)));
        return new Set(rows.map(r => r.place_code));
    },
    async toggle(mapKey, code) {
        const s  = await tx('visits', 'readwrite');
        const k  = this.key(mapKey, code);
        const ex = await idbReq(s.get(k));
        if (ex) { await idbReq(s.delete(k)); return false; }
        await idbReq(s.add({ key: k, map_key: mapKey, place_code: code, created_at: new Date().toISOString() }));
        return true;
    },
    async setMany(mapKey, codes) {
        const current = await this.forMap(mapKey);
        const want = new Set(codes);
        const s = await tx('visits', 'readwrite');
        for (const c of current) if (!want.has(c)) await idbReq(s.delete(this.key(mapKey, c)));
        for (const c of want)    if (!current.has(c)) await idbReq(s.add({ key: this.key(mapKey, c), map_key: mapKey, place_code: c, created_at: new Date().toISOString() }));
    },
    async countsByMap() {
        const s = await tx('visits');
        const all = await idbReq(s.getAll());
        const out = {};
        for (const r of all) out[r.map_key] = (out[r.map_key] || 0) + 1;
        return out;
    },
    async all() { return idbReq((await tx('visits')).getAll()); },
};

// ---------------------------------------------------------------------------
// Helpers
// ---------------------------------------------------------------------------

const $ = (sel, el = document) => el.querySelector(sel);
const $$ = (sel, el = document) => [...el.querySelectorAll(sel)];

function h(tag, attrs = {}, ...children) {
    const el = document.createElement(tag);
    for (const [k, v] of Object.entries(attrs)) {
        if (k === 'class')      el.className = v;
        else if (k === 'html')  el.innerHTML = v;
        else if (k.startsWith('on') && typeof v === 'function') el.addEventListener(k.slice(2).toLowerCase(), v);
        else if (v === true)    el.setAttribute(k, '');
        else if (v !== false && v != null) el.setAttribute(k, v);
    }
    for (const c of children.flat()) {
        if (c == null || c === false) continue;
        el.appendChild(c instanceof Node ? c : document.createTextNode(String(c)));
    }
    return el;
}

const esc = (s) => String(s ?? '').replace(/[&<>"']/g, c => ({ '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;' }[c]));

function flash(msg, ms = 2500) {
    const el = $('#flash');
    el.textContent = msg;
    el.hidden = false;
    clearTimeout(flash._t);
    flash._t = setTimeout(() => { el.hidden = true; }, ms);
}

async function fileToDataURL(file) {
    return new Promise((resolve, reject) => {
        const r = new FileReader();
        r.onload = () => resolve(r.result);
        r.onerror = () => reject(r.error);
        r.readAsDataURL(file);
    });
}

async function updateStorageSize() {
    try {
        if (navigator.storage?.estimate) {
            const { usage } = await navigator.storage.estimate();
            const mb = ((usage || 0) / 1024 / 1024).toFixed(2);
            $('#storage-size').textContent = `${mb} MB on-device`;
        } else {
            $('#storage-size').textContent = 'on-device';
        }
    } catch { $('#storage-size').textContent = 'on-device'; }
}

// ---------------------------------------------------------------------------
// Views
// ---------------------------------------------------------------------------

const view = () => $('#view');

async function viewHome() {
    const [trips, counts] = await Promise.all([Trips.all(), Visits.countsByMap()]);
    const totalPlaces = Object.values(counts).reduce((a, b) => a + b, 0);
    const avgRating = trips.length
        ? (trips.reduce((a, t) => a + (t.rating || 0), 0) / trips.length).toFixed(1)
        : '0.0';
    const countries = new Set(trips.map(t => t.country).filter(Boolean)).size;

    view().innerHTML = `
        <section class="hero">
            <div>
                <h1>Your journey, beautifully logged.</h1>
                <p>Every trip, every country, every province — stored on this device. Nothing leaves.</p>
            </div>
            <dl class="stat-strip">
                <div><dt>Trips</dt><dd>${trips.length}</dd></div>
                <div><dt>Places ticked</dt><dd>${totalPlaces}</dd></div>
                <div><dt>Countries</dt><dd>${countries}</dd></div>
                <div><dt>Avg ★</dt><dd>${avgRating}</dd></div>
            </dl>
        </section>
        <section class="maps-strip">
            <div class="section-head"><h2>Regional maps</h2><a href="#/maps" class="btn-ghost">See all →</a></div>
            <ul class="mini-maps" id="mini-maps"></ul>
        </section>
        <h2 class="section-h2">Recent trips</h2>
        <div id="trip-list"></div>
    `;

    const mini = $('#mini-maps');
    for (const [key, m] of Object.entries(MAPS)) {
        const have = counts[key] || 0;
        const total = Object.keys(m.places).length;
        const pct = total ? Math.round(have / total * 100) : 0;
        mini.appendChild(h('li', {}, h('a', { class: 'mini-map', href: `#/maps/${key}` },
            h('span', { class: 'mini-map__emoji' }, m.emoji),
            h('div', {},
                h('strong', {}, m.title),
                h('span', { class: 'mini-map__meta' }, `${have}/${total} · ${pct}%`)),
            h('div', { class: 'bar bar--sm' }, h('div', { class: 'bar-fill', style: `width:${pct}%` })),
        )));
    }

    const list = $('#trip-list');
    if (trips.length === 0) {
        list.innerHTML = `
            <div class="empty">
                <h2>No trips yet</h2>
                <p>Start with your most recent adventure.</p>
                <a href="#/new" class="btn-primary">Log your first trip →</a>
            </div>`;
    } else {
        const grid = h('div', { class: 'trip-grid' });
        list.appendChild(grid);
        for (const t of trips) grid.appendChild(tripCard(t));
    }
}

function tripCard(t) {
    const meta = [];
    if (t.country)  meta.push(esc(countryName(t.country)));
    if (t.location) meta.push('· ' + esc(t.location));
    const stars = (t.rating || 0) > 0
        ? `<span class="stars">${'★'.repeat(t.rating)}${'☆'.repeat(5 - t.rating)}</span>` : '';
    const photo = t.photo
        ? `<a href="#/edit/${t.id}" class="trip-photo" style="background-image:url('${t.photo}')"></a>`
        : `<a href="#/edit/${t.id}" class="trip-photo trip-photo--placeholder"><span>🧭</span></a>`;
    return h('article', { class: 'trip-card', html: `
        ${photo}
        <div class="trip-body">
            <h3><a href="#/edit/${t.id}">${esc(t.title)}</a></h3>
            <p class="trip-meta">${meta.join(' ')}</p>
            <p class="trip-meta">
                ${t.visited_on ? `<time>${esc(t.visited_on)}</time>` : ''}
                ${stars}
            </p>
            ${t.notes ? `<p class="trip-note">${esc(String(t.notes).slice(0, 200))}${(t.notes.length || 0) > 200 ? '…' : ''}</p>` : ''}
            <div class="trip-actions">
                <a href="#/edit/${t.id}">Edit</a>
                <button type="button" class="link-danger" data-del="${t.id}">Delete</button>
            </div>
        </div>
    ` });
}

const COUNTRY_NAMES = (() => {
    // Build a lookup from all map data (union of all 2-letter codes → names)
    const m = new Map();
    for (const map of Object.values(MAPS)) {
        for (const [code, name] of Object.entries(map.places)) {
            if (code.length === 2 && !m.has(code)) m.set(code, name);
        }
    }
    return m;
})();
const countryName = (c) => COUNTRY_NAMES.get((c || '').toUpperCase()) || c || '—';

async function viewMaps() {
    const counts = await Visits.countsByMap();
    const grid = Object.entries(MAPS).map(([key, m]) => {
        const have = counts[key] || 0;
        const total = Object.keys(m.places).length;
        const pct = total ? Math.round(have / total * 100) : 0;
        return `
            <a class="map-card" href="#/maps/${key}">
                <div class="map-card__emoji">${m.emoji}</div>
                <div class="map-card__body">
                    <h3>${esc(m.title)}</h3>
                    <p class="muted">${esc(m.subtitle)}</p>
                    <div class="map-card__progress">
                        <div class="bar"><div class="bar-fill" style="width:${pct}%"></div></div>
                        <span class="bar-value">${have}/${total}</span>
                    </div>
                </div>
            </a>`;
    }).join('');
    view().innerHTML = `
        <section>
            <h1>Regional maps</h1>
            <p class="muted">Click into a map to tick off the places you've been. Selections save automatically to this device.</p>
            <div class="maps-grid">${grid}</div>
        </section>`;
}

async function viewMap(key) {
    const m = MAPS[key];
    if (!m) { view().innerHTML = '<h1>Map not found</h1><p><a href="#/maps">Back</a></p>'; return; }
    const visited = await Visits.forMap(key);
    const total = Object.keys(m.places).length;
    const have = visited.size;
    const pct = total ? Math.round(have / total * 100) : 0;

    const chips = Object.entries(m.places).map(([code, name]) => `
        <li><label class="place-chip ${visited.has(code) ? 'is-on' : ''}" data-code="${esc(code)}">
            <input type="checkbox" ${visited.has(code) ? 'checked' : ''}>
            <span class="place-chip__code">${esc(code)}</span>
            <span class="place-chip__name">${esc(name)}</span>
            <span class="place-chip__tick" aria-hidden="true">✓</span>
        </label></li>`).join('');

    view().innerHTML = `
        <section class="map-page">
            <div class="map-head">
                <div>
                    <p class="eyebrow"><a href="#/maps">← All maps</a></p>
                    <h1><span class="map-head__emoji">${m.emoji}</span> ${esc(m.title)}</h1>
                    <p class="muted">${esc(m.subtitle)}</p>
                </div>
                <div class="map-head__progress">
                    <div class="big-pct" id="big-pct">${pct}%</div>
                    <div class="muted"><span id="have-count">${have}</span> of ${total} visited</div>
                    <div class="bar" style="min-width:200px"><div class="bar-fill" id="map-bar" style="width:${pct}%"></div></div>
                </div>
            </div>
            <div class="map-toolbar">
                <input type="search" id="map-filter" placeholder="Filter…" aria-label="Filter">
                <button type="button" class="btn-ghost" id="select-all">Mark all</button>
                <button type="button" class="btn-ghost" id="clear-all">Clear all</button>
            </div>
            <ul class="place-grid">${chips}</ul>
        </section>`;

    const bar = $('#map-bar'), haveEl = $('#have-count'), pctEl = $('#big-pct');
    let n = have;
    const render = () => {
        haveEl.textContent = n;
        const p = total ? Math.round(n / total * 100) : 0;
        bar.style.width = p + '%'; pctEl.textContent = p + '%';
    };

    const toggleChip = async (chip) => {
        const code = chip.dataset.code;
        const on = await Visits.toggle(key, code);
        chip.classList.toggle('is-on', on);
        chip.querySelector('input').checked = on;
        n += on ? 1 : -1;
        render();
    };

    $$('.place-chip').forEach(c => c.addEventListener('click', (e) => {
        e.preventDefault();
        toggleChip(c);
    }));

    $('#map-filter').addEventListener('input', (e) => {
        const q = e.target.value.trim().toLowerCase();
        $$('.place-grid li').forEach(li => {
            li.style.display = (!q || li.textContent.toLowerCase().includes(q)) ? '' : 'none';
        });
    });

    $('#select-all').addEventListener('click', async () => {
        await Visits.setMany(key, Object.keys(m.places));
        location.hash = '#/maps/' + key;
    });
    $('#clear-all').addEventListener('click', async () => {
        if (!confirm('Unmark every place on this map?')) return;
        await Visits.setMany(key, []);
        location.hash = '#/maps/' + key;
    });
}

async function viewStats() {
    const [trips, counts] = await Promise.all([Trips.all(), Visits.countsByMap()]);
    const totalPlaces = Object.values(counts).reduce((a, b) => a + b, 0);
    const totalAll = Object.values(MAPS).reduce((a, m) => a + Object.keys(m.places).length, 0);
    const firstOn = trips.map(t => t.visited_on).filter(Boolean).sort()[0] || '—';
    const lastOn  = trips.map(t => t.visited_on).filter(Boolean).sort().pop() || '—';
    const avgRating = trips.length ? (trips.reduce((a, t) => a + (t.rating || 0), 0) / trips.length).toFixed(2) : '0.00';
    const countries = new Set(trips.map(t => t.country).filter(Boolean)).size;

    const byYear = {};
    for (const t of trips) if (t.visited_on) { const y = t.visited_on.slice(0, 4); byYear[y] = (byYear[y] || 0) + 1; }
    const byCountry = {};
    for (const t of trips) if (t.country) byCountry[t.country] = (byCountry[t.country] || 0) + 1;

    const maxYear = Math.max(1, ...Object.values(byYear));
    const yearBars = Object.keys(byYear).sort().map(y =>
        `<div class="bar-row"><span class="bar-label">${esc(y)}</span><div class="bar"><div class="bar-fill" style="width:${Math.round(byYear[y] / maxYear * 100)}%"></div></div><span class="bar-value">${byYear[y]}</span></div>`).join('');

    const mapBars = Object.entries(MAPS).map(([key, m]) => {
        const have = counts[key] || 0;
        const tot  = Object.keys(m.places).length;
        const pct  = tot ? Math.round(have / tot * 100) : 0;
        return `<div class="bar-row"><span class="bar-label"><a href="#/maps/${key}">${esc(m.title)}</a></span><div class="bar"><div class="bar-fill" style="width:${pct}%"></div></div><span class="bar-value">${have}/${tot}</span></div>`;
    }).join('');

    const chips = Object.entries(byCountry).sort((a, b) => b[1] - a[1])
        .map(([code, n]) => `<li class="chip">${esc(countryName(code))} <span class="chip-count">${n}</span></li>`).join('');

    view().innerHTML = `
        <section>
            <h1>Your travel stats</h1>
            <dl class="stat-strip stat-strip--wide">
                <div><dt>Trips</dt><dd>${trips.length}</dd></div>
                <div><dt>Countries (trips)</dt><dd>${countries}</dd></div>
                <div><dt>Places ticked</dt><dd>${totalPlaces}</dd></div>
                <div><dt>Overall</dt><dd>${totalAll ? Math.round(totalPlaces / totalAll * 100) : 0}%</dd></div>
                <div><dt>First trip</dt><dd>${esc(firstOn)}</dd></div>
                <div><dt>Most recent</dt><dd>${esc(lastOn)}</dd></div>
                <div><dt>Avg ★</dt><dd>${avgRating}</dd></div>
            </dl>

            <h2>Progress across maps</h2>
            <div class="bars">${mapBars}</div>

            ${yearBars ? `<h2>Trips per year</h2><div class="bars">${yearBars}</div>` : ''}
            ${chips ? `<h2>Top countries (from trips)</h2><ul class="chip-list">${chips}</ul>` : ''}
        </section>`;
}

async function viewTripForm(id = null) {
    const trip = id ? await Trips.get(id) : null;
    if (id && !trip) { view().innerHTML = '<h1>Trip not found</h1>'; return; }

    const t = trip || {};
    const options = [...COUNTRY_NAMES.entries()].sort((a, b) => a[1].localeCompare(b[1]))
        .map(([code, name]) => `<option value="${code}" ${t.country === code ? 'selected' : ''}>${esc(name)}</option>`).join('');

    view().innerHTML = `
        <section class="form-card">
            <h1>${trip ? 'Edit trip' : 'New trip'}</h1>
            <form class="trip-form" id="trip-form">
                <label class="field"><span>Title *</span>
                    <input name="title" required maxlength="255" value="${esc(t.title || '')}" placeholder="Weekend in Lisbon"></label>
                <div class="row">
                    <label class="field"><span>Country</span>
                        <select name="country"><option value="">— Select —</option>${options}</select></label>
                    <label class="field"><span>City / Location</span>
                        <input name="location" maxlength="255" value="${esc(t.location || '')}" placeholder="Lisbon, Portugal"></label>
                </div>
                <div class="row">
                    <label class="field"><span>Date visited</span>
                        <input type="date" name="visited_on" value="${esc(t.visited_on || '')}"></label>
                    <label class="field"><span>Rating</span>
                        <select name="rating">${[0,1,2,3,4,5].map(i =>
                            `<option value="${i}" ${Number(t.rating || 0) === i ? 'selected' : ''}>${i === 0 ? '—' : '★'.repeat(i)}</option>`).join('')}</select></label>
                </div>
                <div class="row">
                    <label class="field"><span>Latitude</span>
                        <input type="number" step="any" name="latitude" value="${esc(t.latitude ?? '')}"></label>
                    <label class="field"><span>Longitude</span>
                        <input type="number" step="any" name="longitude" value="${esc(t.longitude ?? '')}"></label>
                    <button type="button" class="btn-ghost" id="geo-btn">Use my location</button>
                </div>
                <label class="field"><span>Notes</span>
                    <textarea name="notes" rows="6">${esc(t.notes || '')}</textarea></label>
                <label class="field"><span>Photo (stored on this device)</span>
                    <input type="file" name="photo" accept="image/*">
                    ${t.photo ? `<img class="photo-preview" src="${t.photo}" alt="Current photo">` : ''}</label>
                <div class="form-actions">
                    <button type="submit" class="btn-primary">${trip ? 'Save changes' : 'Log trip'}</button>
                    <a href="#/" class="btn-ghost">Cancel</a>
                    ${trip ? `<button type="button" class="link-danger" id="delete-btn" style="margin-left:auto;">Delete</button>` : ''}
                </div>
            </form>
        </section>`;

    $('#geo-btn')?.addEventListener('click', () => {
        if (!navigator.geolocation) return;
        navigator.geolocation.getCurrentPosition((pos) => {
            $('[name=latitude]').value  = pos.coords.latitude.toFixed(6);
            $('[name=longitude]').value = pos.coords.longitude.toFixed(6);
        });
    });

    $('#delete-btn')?.addEventListener('click', async () => {
        if (!confirm('Delete this trip?')) return;
        await Trips.remove(id);
        flash('Trip deleted.');
        location.hash = '#/';
    });

    $('#trip-form').addEventListener('submit', async (e) => {
        e.preventDefault();
        const f = new FormData(e.target);
        const data = {
            title:      f.get('title').trim(),
            country:    f.get('country') || null,
            location:   f.get('location') || null,
            latitude:   f.get('latitude')  ? Number(f.get('latitude'))  : null,
            longitude:  f.get('longitude') ? Number(f.get('longitude')) : null,
            visited_on: f.get('visited_on') || null,
            rating:     Number(f.get('rating') || 0),
            notes:      f.get('notes') || '',
            photo:      trip?.photo || null,
        };
        const file = f.get('photo');
        if (file && file.size > 0) {
            if (file.size > 4 * 1024 * 1024) { flash('Photo too large (max 4 MB).'); return; }
            data.photo = await fileToDataURL(file);
        }
        if (trip) await Trips.update(id, data);
        else      await Trips.create(data);
        flash(trip ? 'Trip saved.' : 'Trip logged.');
        location.hash = '#/';
    });
}

async function viewWorld() {
    const trips = (await Trips.all()).filter(t => t.latitude != null && t.longitude != null);
    view().innerHTML = `
        <section class="map-wrap">
            <h1>Your world map</h1>
            <p class="muted">Trips with coordinates appear as pins. Add lat/lng to a trip to include it here.</p>
            <div id="leaflet-map" style="height:70vh;width:100%;border-radius:18px;overflow:hidden;"></div>
        </section>`;

    if (!window.L) {
        await new Promise((res, rej) => {
            const css = document.createElement('link');
            css.rel = 'stylesheet';
            css.href = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';
            document.head.appendChild(css);
            const s = document.createElement('script');
            s.src = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';
            s.onload = res; s.onerror = rej;
            document.head.appendChild(s);
        }).catch(() => {
            $('#leaflet-map').textContent = 'Map tiles are unavailable offline. Connect to the internet once to cache them.';
            return;
        });
    }

    if (!window.L) return;
    const map = L.map('leaflet-map', { worldCopyJump: true }).setView([20, 0], 2);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; OpenStreetMap',
    }).addTo(map);
    const group = L.featureGroup().addTo(map);
    for (const t of trips) {
        const m = L.marker([t.latitude, t.longitude]).addTo(group);
        m.bindPopup(`<strong>${esc(t.title)}</strong><br>${esc(t.location || '')}<br><small>${esc(t.visited_on || '')}</small>`);
    }
    if (trips.length) map.fitBounds(group.getBounds().pad(0.2));
}

async function viewExport() {
    const [trips, visits] = await Promise.all([Trips.all(), Visits.all()]);
    const blob = new Blob([JSON.stringify({ version: 1, exported_at: new Date().toISOString(), trips, visits }, null, 2)],
        { type: 'application/json' });
    const url = URL.createObjectURL(blob);

    view().innerHTML = `
        <section>
            <h1>Export your data</h1>
            <p>Download a complete backup — trips and every ticked place. Your photos are embedded as data URLs.</p>
            <p><a class="btn-primary" download="travellog-${new Date().toISOString().slice(0, 10)}.json" href="${url}">Download JSON</a></p>
            <p class="muted">Contains ${trips.length} trips and ${visits.length} place visits.</p>
        </section>`;
}

async function viewImport() {
    view().innerHTML = `
        <section>
            <h1>Import a backup</h1>
            <p class="muted">Merges a Travel Log JSON export into this device. Existing trips stay; place visits are unioned.</p>
            <div class="import-drop" id="drop">
                <p>Drag a <code>.json</code> file here, or</p>
                <p><input type="file" id="import-file" accept="application/json"></p>
            </div>
        </section>`;
    const drop = $('#drop');
    const handle = async (file) => {
        try {
            const data = JSON.parse(await file.text());
            let added = 0;
            for (const t of (data.trips || [])) {
                const { id, ...rest } = t;
                await Trips.create(rest);
                added++;
            }
            let vadded = 0;
            for (const v of (data.visits || [])) {
                try { await Visits.toggle(v.map_key, v.place_code); vadded++; } catch {}
            }
            // toggle may have UN-ticked already-visited places; re-run to ensure they're on
            for (const v of (data.visits || [])) {
                const set = await Visits.forMap(v.map_key);
                if (!set.has(v.place_code)) await Visits.toggle(v.map_key, v.place_code);
            }
            flash(`Imported ${added} trips and ${vadded} place visits.`);
            location.hash = '#/';
        } catch (e) {
            flash('Import failed: ' + e.message);
        }
    };
    $('#import-file').addEventListener('change', (e) => e.target.files[0] && handle(e.target.files[0]));
    ['dragover', 'dragenter'].forEach(ev => drop.addEventListener(ev, (e) => { e.preventDefault(); drop.classList.add('drag'); }));
    ['dragleave', 'dragend', 'drop'].forEach(ev => drop.addEventListener(ev, () => drop.classList.remove('drag')));
    drop.addEventListener('drop', (e) => {
        e.preventDefault();
        const f = e.dataTransfer.files[0];
        if (f) handle(f);
    });
}

// ---------------------------------------------------------------------------
// Router
// ---------------------------------------------------------------------------

async function router() {
    const hash = location.hash || '#/';
    const parts = hash.replace(/^#\/?/, '').split('/').filter(Boolean);
    const key = parts[0] || 'home';

    try {
        if      (key === 'home' || parts.length === 0) await viewHome();
        else if (key === 'maps' && parts[1])           await viewMap(parts[1]);
        else if (key === 'maps')                       await viewMaps();
        else if (key === 'world')                      await viewWorld();
        else if (key === 'stats')                      await viewStats();
        else if (key === 'new')                        await viewTripForm();
        else if (key === 'edit')                       await viewTripForm(Number(parts[1]));
        else if (key === 'export')                     await viewExport();
        else if (key === 'import')                     await viewImport();
        else { view().innerHTML = '<h1>Not found</h1><p><a href="#/">Home</a></p>'; }
    } catch (e) {
        console.error(e);
        view().innerHTML = `<h1>Something went wrong</h1><pre>${esc(e.message || e)}</pre>`;
    }

    // highlight current nav
    $$('.nav a').forEach(a => a.classList.toggle('active',
        (a.getAttribute('href') || '').startsWith('#/' + (key === 'home' ? '' : key))));

    await updateStorageSize();
}

// Delegated delete handler on the trip list
document.addEventListener('click', async (e) => {
    const btn = e.target.closest('[data-del]');
    if (!btn) return;
    if (!confirm('Delete this trip?')) return;
    await Trips.remove(btn.dataset.del);
    flash('Trip deleted.');
    router();
});

// Theme toggle
(function theme() {
    const root = document.documentElement;
    const key = 'travellog.theme';
    const saved = localStorage.getItem(key);
    if (saved) root.setAttribute('data-theme', saved);
    document.querySelector('.theme-toggle')?.addEventListener('click', () => {
        const cur = root.getAttribute('data-theme') || 'auto';
        const next = cur === 'auto' ? 'light' : cur === 'light' ? 'dark' : 'auto';
        root.setAttribute('data-theme', next);
        localStorage.setItem(key, next);
    });
})();

window.addEventListener('hashchange', router);
window.addEventListener('load', () => {
    router();
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('./sw.js').catch(() => {});
    }
});
