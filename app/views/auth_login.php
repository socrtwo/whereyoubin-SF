<?php
use TravelLog\View;
?>
<section class="auth-card">
    <h1>Sign in</h1>
    <p class="muted">Sign in from any browser or device and your selections come back with you — even if cookies are cleared or your IP has changed.</p>

    <form method="post" action="<?= base_url('/login') ?>" class="trip-form">
        <input type="hidden" name="csrf" value="<?= View::e($_SESSION['csrf'] ?? '') ?>">
        <label class="field">
            <span>Email</span>
            <input type="email" name="email" required autocomplete="email" autofocus>
        </label>
        <label class="field">
            <span>Password</span>
            <input type="password" name="password" required autocomplete="current-password" minlength="8">
        </label>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Sign in</button>
            <a class="btn-ghost" href="<?= base_url('/signup') ?>">Create an account</a>
        </div>
    </form>
</section>
