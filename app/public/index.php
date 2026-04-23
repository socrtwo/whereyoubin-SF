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

use TravelLog\Auth;
use TravelLog\Maps;
use TravelLog\Router;
use TravelLog\Trip;
use TravelLog\View;
use TravelLog\Visit;

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

/**
 * Returns the owner string used for data ownership:
 *   - "u:<id>" when logged in (portable across devices, browsers, IPs)
 *   - "g:<cookie>" otherwise (falls back to device-local storage)
 *
 * A logged-in user's data is always keyed by account, so clearing cookies,
 * switching browsers/computers, or having an ISP rotate your IP has no effect.
 */
function owner(): string
{
    $user = Auth::currentUser();
    if ($user) return 'u:' . $user['id'];

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
    return 'g:' . $_COOKIE['tl_uid'];
}

function guest_owner(): string
{
    return 'g:' . (string)($_COOKIE['tl_uid'] ?? '');
}

function handle_upload(?array $file): ?string
{
    if (!$file || ($file['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_NO_FILE) return null;
    if ($file['error'] !== UPLOAD_ERR_OK) return null;
    if ($file['size'] > 8 * 1024 * 1024) return null;
    $mime  = mime_content_type($file['tmp_name']) ?: '';
    $allow = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp', 'image/gif' => 'gif'];
    if (!isset($allow[$mime])) return null;

    $dir = __DIR__ . '/uploads';
    if (!is_dir($dir)) mkdir($dir, 0775, true);
    $name = bin2hex(random_bytes(10)) . '.' . $allow[$mime];
    if (!move_uploaded_file($file['tmp_name'], $dir . '/' . $name)) return null;
    return 'uploads/' . $name;
}

function base_url(string $path = ''): string
{
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
    return ($base ?: '') . $path;
}

$router = new Router();

// ---------- Dashboard / trips ----------

$router->add('GET', '/', function (): void {
    $own   = owner();
    $trips = Trip::all($own);
    $stats = Trip::stats($own);
    $maps  = Maps::all();
    $counts = Visit::countsByMap($own);
    View::render('index', compact('trips', 'stats', 'maps', 'counts') + ['page' => 'index']);
});

$router->add('GET', '/map', function (): void {
    $trips = Trip::all(owner());
    View::render('map', ['trips' => $trips, 'page' => 'map']);
});

$router->add('GET', '/stats', function (): void {
    $own   = owner();
    $trips = Trip::all($own);
    $stats = Trip::stats($own);
    $counts = Visit::countsByMap($own);
    $maps   = Maps::all();
    View::render('stats', compact('trips', 'stats', 'counts', 'maps') + ['page' => 'stats']);
});

$router->add('GET', '/new', function (): void {
    View::render('form', ['trip' => null, 'page' => 'new']);
});

$router->add('POST', '/new', function (): void {
    csrf_check();
    $data = $_POST;
    $data['photo_path'] = handle_upload($_FILES['photo'] ?? null);
    if (trim((string)($data['title'] ?? '')) === '') {
        header('Location: ' . base_url('/new?error=title'));
        return;
    }
    Trip::create($data, owner());
    header('Location: ' . base_url('/'));
});

$router->add('GET', '/edit/{id}', function (array $args): void {
    $trip = Trip::find((int)$args['id'], owner());
    if (!$trip) { http_response_code(404); echo 'Not found'; return; }
    View::render('form', ['trip' => $trip, 'page' => 'edit']);
});

$router->add('POST', '/edit/{id}', function (array $args): void {
    csrf_check();
    $data = $_POST;
    $data['photo_path'] = handle_upload($_FILES['photo'] ?? null);
    Trip::update((int)$args['id'], $data, owner());
    header('Location: ' . base_url('/'));
});

$router->add('POST', '/delete/{id}', function (array $args): void {
    csrf_check();
    Trip::delete((int)$args['id'], owner());
    header('Location: ' . base_url('/'));
});

// ---------- Regional maps ----------

$router->add('GET', '/maps', function (): void {
    $own = owner();
    $counts = Visit::countsByMap($own);
    View::render('maps_index', ['maps' => Maps::all(), 'counts' => $counts, 'page' => 'maps']);
});

$router->add('GET', '/maps/{key}', function (array $args): void {
    $key = (string) $args['key'];
    $map = Maps::get($key);
    if (!$map) { http_response_code(404); echo 'Map not found'; return; }
    $visited = Visit::visitedCodes(owner(), $key);
    View::render('maps_show', [
        'page'    => 'maps',
        'key'     => $key,
        'map'     => $map,
        'visited' => $visited,
    ]);
});

$router->add('POST', '/maps/{key}', function (array $args): void {
    csrf_check();
    $key = (string) $args['key'];
    if (!Maps::get($key)) { http_response_code(404); return; }
    $codes = $_POST['places'] ?? [];
    if (!is_array($codes)) $codes = [];
    Visit::setVisited(owner(), $key, $codes);
    header('Location: ' . base_url('/maps/' . urlencode($key)));
});

/** Inline toggle endpoint used by the map UI (JS fetch, returns JSON) */
$router->add('POST', '/api/maps/{key}/toggle', function (array $args): void {
    csrf_check();
    $key = (string) $args['key'];
    if (!Maps::get($key)) { http_response_code(404); exit('{}'); }
    $code = (string) ($_POST['code'] ?? '');
    $now  = Visit::toggle(owner(), $key, $code);
    header('Content-Type: application/json');
    echo json_encode(['visited' => $now, 'map' => $key, 'code' => $code]);
});

// ---------- Auth ----------

$router->add('GET', '/signup', function (): void {
    View::render('auth_signup', ['page' => 'auth', 'error' => $_GET['error'] ?? null]);
});

$router->add('POST', '/signup', function (): void {
    csrf_check();
    $email = (string) ($_POST['email'] ?? '');
    $pass  = (string) ($_POST['password'] ?? '');
    $name  = (string) ($_POST['display_name'] ?? '');
    $guest = guest_owner();

    $res = Auth::register($email, $pass, $name);
    if (!$res['ok']) {
        $_SESSION['flash'] = $res['error'];
        header('Location: ' . base_url('/signup'));
        return;
    }
    Auth::startSession((int) $res['user_id']);
    Auth::claimGuestData($guest, (int) $res['user_id']);
    $_SESSION['flash'] = 'Welcome! Your account has been created and any existing selections have been imported.';
    header('Location: ' . base_url('/'));
});

$router->add('GET', '/login', function (): void {
    View::render('auth_login', ['page' => 'auth']);
});

$router->add('POST', '/login', function (): void {
    csrf_check();
    $email = (string) ($_POST['email'] ?? '');
    $pass  = (string) ($_POST['password'] ?? '');
    $guest = guest_owner();

    $res = Auth::login($email, $pass);
    if (!$res['ok']) {
        $_SESSION['flash'] = $res['error'];
        header('Location: ' . base_url('/login'));
        return;
    }
    Auth::startSession((int) $res['user_id']);
    Auth::claimGuestData($guest, (int) $res['user_id']);
    $_SESSION['flash'] = 'Signed in. Your selections have been restored.';
    header('Location: ' . base_url('/'));
});

$router->add('POST', '/logout', function (): void {
    csrf_check();
    Auth::logout();
    $_SESSION['flash'] = 'Signed out.';
    header('Location: ' . base_url('/'));
});

// ---------- APIs ----------

$router->add('GET', '/api/trips.json', function (): void {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(Trip::all(owner()), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
});

$router->add('GET', '/api/export.csv', function (): void {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="travel-log.csv"');
    $out = fopen('php://output', 'w');
    fputcsv($out, ['id', 'title', 'country', 'location', 'latitude', 'longitude', 'visited_on', 'rating', 'notes']);
    foreach (Trip::all(owner()) as $t) {
        fputcsv($out, [$t['id'], $t['title'], $t['country'], $t['location'], $t['latitude'], $t['longitude'], $t['visited_on'], $t['rating'], $t['notes']]);
    }
});

$router->add('GET', '/api/places.json', function (): void {
    header('Content-Type: application/json; charset=utf-8');
    $own = owner();
    $out = [];
    foreach (Maps::all() as $key => $_) {
        $out[$key] = Visit::visitedCodes($own, $key);
    }
    echo json_encode($out, JSON_UNESCAPED_UNICODE);
});

$router->dispatch($_SERVER['REQUEST_METHOD'] ?? 'GET', $_SERVER['REQUEST_URI'] ?? '/');
