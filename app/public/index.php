<?php
declare(strict_types=1);

/**
 * Front controller for the Travel Log app.
 * PHP 8.2+ required. Zero third-party dependencies.
 */

error_reporting(E_ALL);
ini_set('display_errors', '0');
ini_set('log_errors', '1');

// Let PHP's built-in dev server serve existing files directly.
if (PHP_SAPI === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
    if ($path !== '/' && is_file(__DIR__ . $path)) {
        return false;
    }
}

session_start();

spl_autoload_register(static function (string $class): void {
    $prefix = 'TravelLog\\';
    if (!str_starts_with($class, $prefix)) return;
    $file = __DIR__ . '/../src/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
    if (is_file($file)) require $file;
});

// CSRF token for state-changing requests
if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(16));
}

function csrf_check(): void
{
    if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'GET') {
        $sent = (string)($_POST['csrf'] ?? $_SERVER['HTTP_X_CSRF'] ?? '');
        if (!hash_equals((string)($_SESSION['csrf'] ?? ''), $sent)) {
            http_response_code(419);
            exit('CSRF token mismatch.');
        }
    }
}

function user_id(): string
{
    if (empty($_COOKIE['tl_uid'])) {
        $uid = bin2hex(random_bytes(12));
        setcookie('tl_uid', $uid, [
            'expires'  => time() + (10 * 365 * 24 * 3600),
            'path'     => '/',
            'secure'   => !empty($_SERVER['HTTPS']),
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
        $_COOKIE['tl_uid'] = $uid;
    }
    return (string)$_COOKIE['tl_uid'];
}

function handle_upload(?array $file): ?string
{
    if (!$file || ($file['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_NO_FILE) {
        return null;
    }
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return null;
    }
    if ($file['size'] > 8 * 1024 * 1024) {
        return null;
    }
    $mime  = mime_content_type($file['tmp_name']) ?: '';
    $allow = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp', 'image/gif' => 'gif'];
    if (!isset($allow[$mime])) return null;

    $dir = __DIR__ . '/uploads';
    if (!is_dir($dir)) mkdir($dir, 0775, true);
    $name = bin2hex(random_bytes(10)) . '.' . $allow[$mime];
    $dest = $dir . '/' . $name;
    if (!move_uploaded_file($file['tmp_name'], $dest)) {
        return null;
    }
    return 'uploads/' . $name;
}

use TravelLog\Router;
use TravelLog\Trip;
use TravelLog\View;

$router = new Router();

$router->add('GET', '/', function (): void {
    $uid    = user_id();
    $trips  = Trip::all($uid);
    $stats  = Trip::stats($uid);
    View::render('index', ['trips' => $trips, 'stats' => $stats, 'page' => 'index']);
});

$router->add('GET', '/map', function (): void {
    $uid   = user_id();
    $trips = Trip::all($uid);
    View::render('map', ['trips' => $trips, 'page' => 'map']);
});

$router->add('GET', '/stats', function (): void {
    $uid   = user_id();
    $trips = Trip::all($uid);
    $stats = Trip::stats($uid);
    View::render('stats', ['trips' => $trips, 'stats' => $stats, 'page' => 'stats']);
});

$router->add('GET', '/new', function (): void {
    View::render('form', ['trip' => null, 'page' => 'new']);
});

$router->add('POST', '/new', function (): void {
    csrf_check();
    $uid  = user_id();
    $data = $_POST;
    $data['photo_path'] = handle_upload($_FILES['photo'] ?? null);
    if (trim((string)($data['title'] ?? '')) === '') {
        header('Location: ' . base_url('/new?error=title'));
        return;
    }
    Trip::create($data, $uid);
    header('Location: ' . base_url('/'));
});

$router->add('GET', '/edit/{id}', function (array $args): void {
    $uid  = user_id();
    $trip = Trip::find((int)$args['id'], $uid);
    if (!$trip) { http_response_code(404); echo 'Not found'; return; }
    View::render('form', ['trip' => $trip, 'page' => 'edit']);
});

$router->add('POST', '/edit/{id}', function (array $args): void {
    csrf_check();
    $uid  = user_id();
    $data = $_POST;
    $data['photo_path'] = handle_upload($_FILES['photo'] ?? null);
    Trip::update((int)$args['id'], $data, $uid);
    header('Location: ' . base_url('/'));
});

$router->add('POST', '/delete/{id}', function (array $args): void {
    csrf_check();
    Trip::delete((int)$args['id'], user_id());
    header('Location: ' . base_url('/'));
});

$router->add('GET', '/api/trips.json', function (): void {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(Trip::all(user_id()), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
});

$router->add('GET', '/api/export.csv', function (): void {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="travel-log.csv"');
    $out = fopen('php://output', 'w');
    fputcsv($out, ['id', 'title', 'country', 'location', 'latitude', 'longitude', 'visited_on', 'rating', 'notes']);
    foreach (Trip::all(user_id()) as $t) {
        fputcsv($out, [$t['id'], $t['title'], $t['country'], $t['location'], $t['latitude'], $t['longitude'], $t['visited_on'], $t['rating'], $t['notes']]);
    }
});

function base_url(string $path = ''): string
{
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
    return ($base ?: '') . $path;
}

$router->dispatch(
    $_SERVER['REQUEST_METHOD'] ?? 'GET',
    $_SERVER['REQUEST_URI']    ?? '/'
);
