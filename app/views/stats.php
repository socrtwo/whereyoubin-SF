<?php
/** @var array $trips, array $stats */
use TravelLog\View;
use TravelLog\Countries;

// Aggregate by year and by country
$byYear = [];
$byCountry = [];
foreach ($trips as $t) {
    if (!empty($t['visited_on'])) {
        $year = substr((string)$t['visited_on'], 0, 4);
        $byYear[$year] = ($byYear[$year] ?? 0) + 1;
    }
    if (!empty($t['country'])) {
        $byCountry[$t['country']] = ($byCountry[$t['country']] ?? 0) + 1;
    }
}
ksort($byYear);
arsort($byCountry);
$maxYear = max(1, ...array_values($byYear ?: [1]));
?>
<section>
    <h1>Your travel stats</h1>
    <dl class="stat-strip stat-strip--wide">
        <div><dt>Trips</dt><dd><?= (int)$stats['trips'] ?></dd></div>
        <div><dt>Countries visited</dt><dd><?= (int)$stats['countries'] ?></dd></div>
        <div><dt>First trip</dt><dd><?= View::e($stats['first'] ?? '—') ?></dd></div>
        <div><dt>Most recent</dt><dd><?= View::e($stats['last'] ?? '—') ?></dd></div>
        <div><dt>Average ★</dt><dd><?= number_format((float)$stats['ratingAvg'], 2) ?></dd></div>
    </dl>

    <?php if ($byYear): ?>
    <h2>Trips per year</h2>
    <div class="bars">
        <?php foreach ($byYear as $year => $n): ?>
            <div class="bar-row">
                <span class="bar-label"><?= View::e((string)$year) ?></span>
                <div class="bar"><div class="bar-fill" style="width: <?= (int)round($n / $maxYear * 100) ?>%;"></div></div>
                <span class="bar-value"><?= (int)$n ?></span>
            </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php if ($byCountry): ?>
    <h2>Top countries</h2>
    <ul class="chip-list">
        <?php foreach ($byCountry as $code => $n): ?>
            <li class="chip"><?= View::e(Countries::name($code)) ?> <span class="chip-count"><?= (int)$n ?></span></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</section>
