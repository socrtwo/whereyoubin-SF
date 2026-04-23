<?php
/** @var string $file, string $page, array $data */
use TravelLog\View;
$page = $page ?? '';
?><!DOCTYPE html>
<html lang="en" data-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#0ea5e9">
    <title>Travel Log — Where Have You Been?</title>
    <meta name="description" content="A beautiful, cross-platform travel log. Track your trips, photos, countries, and memories. Installable on Windows, macOS, Linux, Android, iOS, and the Web.">
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
            <a href="<?= base_url('/map') ?>"  class="<?= $page === 'map'   ? 'active' : '' ?>">Map</a>
            <a href="<?= base_url('/stats') ?>"class="<?= $page === 'stats' ? 'active' : '' ?>">Stats</a>
            <a href="<?= base_url('/new') ?>"  class="btn-primary">+ New Trip</a>
            <button type="button" class="theme-toggle" aria-label="Toggle theme">🌓</button>
        </nav>
    </header>
    <main class="container">
        <?php include $file; ?>
    </main>
    <footer class="footer">
        <p>Travel Log • Install it from your browser menu on Windows / macOS / Linux / Android / iOS / Web.</p>
        <p><a href="<?= base_url('/api/export.csv') ?>">Export CSV</a> · <a href="<?= base_url('/api/trips.json') ?>">JSON</a> · <a href="../index.php">Legacy Map Tool</a></p>
    </footer>
    <script src="<?= base_url('/app.js') ?>" defer></script>
</body>
</html>
