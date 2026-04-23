<?php
/** @var string $key, array $map, array $visited */
use TravelLog\View;

$visitedSet = array_flip($visited);
$total = count($map['places']);
$have  = count($visited);
$pct   = $total ? (int) round($have / $total * 100) : 0;
?>
<section class="map-page" data-map="<?= View::e($key) ?>" data-csrf="<?= View::e($_SESSION['csrf'] ?? '') ?>" data-api="<?= View::e(base_url('/api/maps/' . urlencode($key) . '/toggle')) ?>">
    <div class="map-head">
        <div>
            <p class="eyebrow"><a href="<?= base_url('/maps') ?>">← All maps</a></p>
            <h1><span class="map-head__emoji"><?= View::e($map['emoji']) ?></span> <?= View::e($map['title']) ?></h1>
            <p class="muted"><?= View::e($map['subtitle']) ?></p>
        </div>
        <div class="map-head__progress">
            <div class="big-pct"><?= $pct ?>%</div>
            <div class="muted"><span id="have-count"><?= $have ?></span> of <?= $total ?> visited</div>
            <div class="bar" style="min-width: 200px;"><div class="bar-fill" id="map-bar" style="width: <?= $pct ?>%"></div></div>
        </div>
    </div>

    <div class="map-toolbar">
        <input type="search" id="map-filter" placeholder="Filter…" autocomplete="off" aria-label="Filter places">
        <button type="button" class="btn-ghost" id="select-all">Mark all</button>
        <button type="button" class="btn-ghost" id="clear-all">Clear all</button>
    </div>

    <form method="post" action="<?= base_url('/maps/' . urlencode($key)) ?>" id="map-form">
        <input type="hidden" name="csrf" value="<?= View::e($_SESSION['csrf'] ?? '') ?>">
        <ul class="place-grid">
            <?php foreach ($map['places'] as $code => $name):
                $on = isset($visitedSet[$code]); ?>
                <li>
                    <label class="place-chip <?= $on ? 'is-on' : '' ?>" data-code="<?= View::e($code) ?>">
                        <input type="checkbox" name="places[]" value="<?= View::e($code) ?>" <?= $on ? 'checked' : '' ?>>
                        <span class="place-chip__code"><?= View::e($code) ?></span>
                        <span class="place-chip__name"><?= View::e($name) ?></span>
                        <span class="place-chip__tick" aria-hidden="true">✓</span>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
        <noscript>
            <p class="muted">JavaScript is off — your changes will be saved when you click the button below.</p>
            <button class="btn-primary" type="submit">Save selections</button>
        </noscript>
    </form>
</section>

<script>
(function () {
    const section = document.querySelector('.map-page');
    if (!section) return;
    const api   = section.dataset.api;
    const csrf  = section.dataset.csrf;
    const total = <?= $total ?>;
    const bar   = document.getElementById('map-bar');
    const have  = document.getElementById('have-count');
    let visited = section.querySelectorAll('.place-chip.is-on').length;

    function updateProgress() {
        have.textContent = String(visited);
        bar.style.width = (total ? Math.round(visited / total * 100) : 0) + '%';
    }

    async function toggle(chip) {
        const code = chip.dataset.code;
        const input = chip.querySelector('input[type=checkbox]');
        const wasOn = chip.classList.contains('is-on');
        chip.classList.toggle('is-on');
        input.checked = !wasOn;
        visited += input.checked ? 1 : -1;
        updateProgress();

        const body = new URLSearchParams();
        body.set('code', code);
        body.set('csrf', csrf);
        try {
            const res = await fetch(api, { method: 'POST', body });
            if (!res.ok) throw new Error('bad response');
        } catch (e) {
            // revert on failure
            chip.classList.toggle('is-on');
            input.checked = wasOn;
            visited += input.checked ? 1 : -1;
            updateProgress();
        }
    }

    section.querySelectorAll('.place-chip').forEach((chip) => {
        chip.addEventListener('click', (ev) => {
            ev.preventDefault();
            toggle(chip);
        });
    });

    // Filter
    const filter = document.getElementById('map-filter');
    filter.addEventListener('input', () => {
        const q = filter.value.trim().toLowerCase();
        document.querySelectorAll('.place-grid li').forEach((li) => {
            const t = li.textContent.toLowerCase();
            li.style.display = (!q || t.includes(q)) ? '' : 'none';
        });
    });

    // Bulk actions
    async function bulk(target) {
        const chips = [...document.querySelectorAll('.place-chip')];
        for (const chip of chips) {
            const on = chip.classList.contains('is-on');
            if ((target === 'all' && !on) || (target === 'none' && on)) {
                await toggle(chip);
            }
        }
    }
    document.getElementById('select-all').addEventListener('click', () => bulk('all'));
    document.getElementById('clear-all').addEventListener('click', () => {
        if (confirm('Unmark every place on this map?')) bulk('none');
    });
})();
</script>
