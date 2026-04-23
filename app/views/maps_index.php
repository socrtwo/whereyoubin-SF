<?php
/** @var array $maps, array $counts */
use TravelLog\View;
?>
<section>
    <h1>Regional maps</h1>
    <p class="muted">Click into any map to tick off the places you've visited. Your selections are saved to your account and restored on any device when you sign in.</p>

    <div class="maps-grid">
        <?php foreach ($maps as $key => $m):
            $have  = (int)($counts[$key] ?? 0);
            $total = count($m['places']);
            $pct   = $total ? (int) round($have / $total * 100) : 0;
        ?>
            <a class="map-card" href="<?= base_url('/maps/' . urlencode($key)) ?>">
                <div class="map-card__emoji"><?= View::e($m['emoji']) ?></div>
                <div class="map-card__body">
                    <h3><?= View::e($m['title']) ?></h3>
                    <p class="muted"><?= View::e($m['subtitle']) ?></p>
                    <div class="map-card__progress">
                        <div class="bar"><div class="bar-fill" style="width: <?= $pct ?>%"></div></div>
                        <span class="bar-value"><?= $have ?>/<?= $total ?></span>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>
