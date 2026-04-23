<?php
/** @var array $trips, array $stats, array $maps, array $counts */
use TravelLog\View;
use TravelLog\Countries;
?>
<section class="hero">
    <div>
        <h1>Your journey, beautifully logged.</h1>
        <p>Capture trips, photos, notes, and ratings. Tick off every country, state, and province you've visited across <strong>12 regional maps</strong>.</p>
    </div>
    <dl class="stat-strip">
        <div><dt>Trips</dt><dd><?= (int)$stats['trips'] ?></dd></div>
        <div><dt>Countries logged</dt><dd><?= (int)$stats['countries'] ?></dd></div>
        <div><dt>Maps in use</dt><dd><?= count(array_filter($counts)) ?></dd></div>
        <div><dt>Avg ★</dt><dd><?= number_format((float)$stats['ratingAvg'], 1) ?></dd></div>
    </dl>
</section>

<section class="maps-strip">
    <div class="section-head">
        <h2>Regional maps</h2>
        <a href="<?= base_url('/maps') ?>" class="btn-ghost">See all →</a>
    </div>
    <ul class="mini-maps">
        <?php foreach ($maps as $key => $m):
            $have  = (int)($counts[$key] ?? 0);
            $total = count($m['places']);
            $pct   = $total ? (int) round($have / $total * 100) : 0;
        ?>
            <li>
                <a href="<?= base_url('/maps/' . urlencode($key)) ?>" class="mini-map">
                    <span class="mini-map__emoji"><?= View::e($m['emoji']) ?></span>
                    <div>
                        <strong><?= View::e($m['title']) ?></strong>
                        <span class="mini-map__meta"><?= $have ?>/<?= $total ?> · <?= $pct ?>%</span>
                    </div>
                    <div class="bar bar--sm"><div class="bar-fill" style="width: <?= $pct ?>%"></div></div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php if (!$trips): ?>
    <div class="empty">
        <h2>No trips yet</h2>
        <p>Start your log with your most recent adventure.</p>
        <a href="<?= base_url('/new') ?>" class="btn-primary">Log your first trip →</a>
    </div>
<?php else: ?>
    <h2 class="section-h2">Recent trips</h2>
    <div class="trip-grid">
        <?php foreach ($trips as $t): ?>
            <article class="trip-card">
                <?php if (!empty($t['photo_path'])): ?>
                    <a href="<?= base_url('/edit/' . (int)$t['id']) ?>" class="trip-photo"
                       style="background-image:url('<?= View::e($t['photo_path']) ?>')"></a>
                <?php else: ?>
                    <a href="<?= base_url('/edit/' . (int)$t['id']) ?>" class="trip-photo trip-photo--placeholder"><span>🧭</span></a>
                <?php endif; ?>
                <div class="trip-body">
                    <h3><a href="<?= base_url('/edit/' . (int)$t['id']) ?>"><?= View::e($t['title']) ?></a></h3>
                    <p class="trip-meta">
                        <span><?= View::e(Countries::name($t['country'] ?? null)) ?></span>
                        <?php if (!empty($t['location'])): ?><span>· <?= View::e($t['location']) ?></span><?php endif; ?>
                    </p>
                    <p class="trip-meta">
                        <?php if (!empty($t['visited_on'])): ?><time><?= View::e($t['visited_on']) ?></time><?php endif; ?>
                        <?php if (!empty($t['rating'])): ?>
                            <span class="stars" aria-label="<?= (int)$t['rating'] ?> stars">
                                <?= str_repeat('★', (int)$t['rating']) . str_repeat('☆', max(0, 5 - (int)$t['rating'])) ?>
                            </span>
                        <?php endif; ?>
                    </p>
                    <?php if (!empty($t['notes'])): ?>
                        <p class="trip-note"><?= nl2br(View::e(mb_substr((string)$t['notes'], 0, 200))) ?><?= mb_strlen((string)$t['notes']) > 200 ? '…' : '' ?></p>
                    <?php endif; ?>
                    <div class="trip-actions">
                        <a href="<?= base_url('/edit/' . (int)$t['id']) ?>">Edit</a>
                        <form method="post" action="<?= base_url('/delete/' . (int)$t['id']) ?>" onsubmit="return confirm('Delete this trip?');">
                            <input type="hidden" name="csrf" value="<?= View::e($_SESSION['csrf'] ?? '') ?>">
                            <button type="submit" class="link-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
