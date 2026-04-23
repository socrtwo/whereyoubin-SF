<?php
use TravelLog\View;
?>
<section class="auth-card">
    <h1>Create your Travel Log account</h1>
    <p class="muted">Keep every trip, photo, and checked-off place safe — restored on any browser, computer, or phone whenever you sign in.</p>

    <form method="post" action="<?= base_url('/signup') ?>" class="trip-form">
        <input type="hidden" name="csrf" value="<?= View::e($_SESSION['csrf'] ?? '') ?>">
        <label class="field">
            <span>Display name (optional)</span>
            <input type="text" name="display_name" autocomplete="name" maxlength="80">
        </label>
        <label class="field">
            <span>Email</span>
            <input type="email" name="email" required autocomplete="email" autofocus>
        </label>
        <label class="field">
            <span>Password (min 8 characters)</span>
            <input type="password" name="password" required autocomplete="new-password" minlength="8">
        </label>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Create account</button>
            <a class="btn-ghost" href="<?= base_url('/login') ?>">I already have one</a>
        </div>
    </form>

    <p class="muted" style="margin-top:1rem;">
        Any places and trips you've logged so far as a guest will be automatically attached to your new account.
    </p>
</section>
