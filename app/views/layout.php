<?php
/** @var string $file, string $page */
use TravelLog\Auth;
use TravelLog\View;

$page  = $page ?? '';
$user  = Auth::currentUser();
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?><!DOCTYPE html>
<html lang="en" data-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#0ea5e9">
    <title>Travel Log — Where Have You Been?</title>
    <meta name="description" content="Log trips, tick off countries, provinces and states across 12 regional maps. Installable on Windows, macOS, Linux, Android, iOS, and the Web.">
    <link rel="manifest" href="<?= base_url('/manifest.webmanifest') ?>">
    <link rel="icon" type="image/svg+xml" href="<?= base_url('/icons/icon.svg') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('/icons/icon-192.png') ?>">
    <link rel="stylesheet" href="<?= base_url('/styles.css') ?>">
</head>
<body>
    <header class="topbar">
        <a class="brand" href="<?= base_url('/') ?>">
            <span class="brand-mark" aria-hidden="true">🗺️</span>
            <span class="brand-text">Travel Log</span>
        </a>
        <nav class="nav">
            <a href="<?= base_url('/') ?>"     class="<?= $page === 'index' ? 'active' : '' ?>">Trips</a>
            <a href="<?= base_url('/maps') ?>" class="<?= $page === 'maps'  ? 'active' : '' ?>">Maps</a>
            <a href="<?= base_url('/map') ?>"  class="<?= $page === 'map'   ? 'active' : '' ?>">World</a>
            <a href="<?= base_url('/stats') ?>"class="<?= $page === 'stats' ? 'active' : '' ?>">Stats</a>
            <a href="<?= base_url('/new') ?>"  class="btn-primary">+ New Trip</a>

            <?php if ($user): ?>
                <div class="user-chip">
                    <span class="user-dot" aria-hidden="true"></span>
                    <span class="user-email" title="<?= View::e($user['email']) ?>">
                        <?= View::e($user['display_name'] ?: $user['email']) ?>
                    </span>
                    <form method="post" action="<?= base_url('/logout') ?>" class="inline-form">
                        <input type="hidden" name="csrf" value="<?= View::e($_SESSION['csrf'] ?? '') ?>">
                        <button type="submit" class="link-muted" title="Sign out">Sign out</button>
                    </form>
                </div>
            <?php else: ?>
                <a href="<?= base_url('/login') ?>"  class="nav-auth">Sign in</a>
                <a href="<?= base_url('/signup') ?>" class="nav-auth nav-auth--primary">Sign up</a>
            <?php endif; ?>
            <button type="button" class="theme-toggle" aria-label="Toggle theme">🌓</button>
        </nav>
    </header>

    <?php if ($flash): ?>
        <div class="flash"><?= View::e($flash) ?></div>
    <?php endif; ?>

    <main class="container">
        <?php include $file; ?>
    </main>
    <footer class="footer">
        <p>Travel Log • Install from your browser menu on Windows / macOS / Linux / Android / iOS / Web.</p>
        <p>
            <a href="<?= base_url('/api/export.csv') ?>">Export CSV</a> ·
            <a href="<?= base_url('/api/trips.json') ?>">Trips JSON</a> ·
            <a href="<?= base_url('/api/places.json') ?>">Places JSON</a> ·
            <a href="../index.php">Legacy Map Tool</a>
        </p>
        <?php if (!$user): ?>
            <p class="footer-note">Using guest mode — your picks live in this browser only. <a href="<?= base_url('/signup') ?>">Create an account</a> to keep them forever, across devices.</p>
        <?php endif; ?>
    </footer>
    <script src="<?= base_url('/app.js') ?>" defer></script>
</body>
</html>
