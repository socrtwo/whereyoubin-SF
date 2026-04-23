<?php
/** @var array $trips, array $stats, array $counts, array $maps */
use TravelLog\View;
use TravelLog\Countries;

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

$totalPlacesTicked = array_sum($counts);
$totalPlaces       = array_sum(array_map(static fn($m) => count($m['places']), $maps));
?>
<section>
    <h1>Your travel stats</h1>
    <dl class="stat-strip stat-strip--wide">
        <div><dt>Trips</dt><dd><?= (int)$stats['trips'] ?></dd></div>
        <div><dt>Countries (from trips)</dt><dd><?= (int)$stats['countries'] ?></dd></div>
        <div><dt>Places ticked</dt><dd><?= (int)$totalPlacesTicked ?></dd></div>
        <div><dt>Overall progress</dt><dd><?= $totalPlaces ? (int) round($totalPlacesTicked / $totalPlaces * 100) : 0 ?>%</dd></div>
        <div><dt>First trip</dt><dd><?= View::e($stats['first'] ?? '—') ?></dd></div>
        <div><dt>Avg ★</dt><dd><?= number_format((float)$stats['ratingAvg'], 2) ?></dd></div>
    </dl>

    <h2>Progress across maps</h2>
    <div class="bars">
        <?php foreach ($maps as $key => $m):
            $have  = (int)($counts[$key] ?? 0);
            $total = count($m['places']);
            $pct   = $total ? (int) round($have / $total * 100) : 0; ?>
            <div class="bar-row">
                <span class="bar-label"><a href="<?= base_url('/maps/' . urlencode($key)) ?>"><?= View::e($m['title']) ?></a></span>
                <div class="bar"><div class="bar-fill" style="width: <?= $pct ?>%;"></div></div>
                <span class="bar-value"><?= $have ?>/<?= $total ?></span>
            </div>
        <?php endforeach; ?>
    </div>

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
        <h2>Top countries (from trips)</h2>
        <ul class="chip-list">
            <?php foreach ($byCountry as $code => $n): ?>
                <li class="chip"><?= View::e(Countries::name($code)) ?> <span class="chip-count"><?= (int)$n ?></span></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>
