<?php
/** @var ?array $trip */
use TravelLog\View;
use TravelLog\Countries;
$isEdit = !empty($trip);
$action = $isEdit ? base_url('/edit/' . (int)$trip['id']) : base_url('/new');
?>
<section class="form-card">
    <h1><?= $isEdit ? 'Edit trip' : 'New trip' ?></h1>
    <form method="post" action="<?= $action ?>" enctype="multipart/form-data" class="trip-form">
        <input type="hidden" name="csrf" value="<?= View::e($_SESSION['csrf'] ?? '') ?>">

        <label class="field">
            <span>Title *</span>
            <input name="title" maxlength="255" required value="<?= View::e($trip['title'] ?? '') ?>" placeholder="Weekend in Lisbon">
        </label>

        <div class="row">
            <label class="field">
                <span>Country</span>
                <select name="country">
                    <option value="">— Select —</option>
                    <?php foreach (Countries::all() as $code => $name): ?>
                        <option value="<?= View::e($code) ?>" <?= ($trip['country'] ?? '') === $code ? 'selected' : '' ?>>
                            <?= View::e($name) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>
            <label class="field">
                <span>City / Location</span>
                <input name="location" maxlength="255" value="<?= View::e($trip['location'] ?? '') ?>" placeholder="Lisbon, Portugal">
            </label>
        </div>

        <div class="row">
            <label class="field">
                <span>Date visited</span>
                <input name="visited_on" type="date" value="<?= View::e($trip['visited_on'] ?? '') ?>">
            </label>
            <label class="field">
                <span>Rating</span>
                <select name="rating">
                    <?php for ($i = 0; $i <= 5; $i++): ?>
                        <option value="<?= $i ?>" <?= (int)($trip['rating'] ?? 0) === $i ? 'selected' : '' ?>>
                            <?= $i === 0 ? '—' : str_repeat('★', $i) ?>
                        </option>
                    <?php endfor; ?>
                </select>
            </label>
        </div>

        <div class="row">
            <label class="field">
                <span>Latitude</span>
                <input name="latitude" type="number" step="any" value="<?= View::e($trip['latitude'] ?? '') ?>" placeholder="38.7223">
            </label>
            <label class="field">
                <span>Longitude</span>
                <input name="longitude" type="number" step="any" value="<?= View::e($trip['longitude'] ?? '') ?>" placeholder="-9.1393">
            </label>
            <button type="button" class="btn-ghost" id="geo-btn" title="Use my current location">Use my location</button>
        </div>

        <label class="field">
            <span>Notes</span>
            <textarea name="notes" rows="6" placeholder="Highlights, food, people…"><?= View::e($trip['notes'] ?? '') ?></textarea>
        </label>

        <label class="field">
            <span>Photo</span>
            <input name="photo" type="file" accept="image/*">
            <?php if (!empty($trip['photo_path'])): ?>
                <img class="photo-preview" src="<?= View::e($trip['photo_path']) ?>" alt="Current photo">
            <?php endif; ?>
        </label>

        <div class="form-actions">
            <button type="submit" class="btn-primary"><?= $isEdit ? 'Save changes' : 'Log trip' ?></button>
            <a href="<?= base_url('/') ?>" class="btn-ghost">Cancel</a>
        </div>
    </form>
</section>
