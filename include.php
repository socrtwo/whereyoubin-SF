<?php
/*
 * Modernized include.php — PHP 8.x break-immune.
 *
 * Replaces deprecated/removed PHP APIs:
 *   - mysql_*       → PDO with prepared statements
 *   - eregi/ereg    → preg_match
 *   - get_magic_quotes_gpc() (removed in PHP 8) → no-op
 *   - split()       → preg_split / explode
 *   - <? short tags → <?php
 *
 * Originally derived from CekTKP ShortURL Script (GPLv3+).
 */

declare(strict_types=1);

// --------------------------------------------------------------------------
// Database connection (PDO, break-immune)
// --------------------------------------------------------------------------

/**
 * Lazily return a shared PDO connection.
 */
function db(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $host = defined('MYSQL_HOST') ? MYSQL_HOST : 'localhost';
    $user = defined('MYSQL_USER') ? MYSQL_USER : '';
    $pass = defined('MYSQL_PASS') ? MYSQL_PASS : '';
    $name = defined('MYSQL_DB')   ? MYSQL_DB   : '';

    $dsn = sprintf(
        'mysql:host=%s;dbname=%s;charset=utf8mb4',
        $host,
        $name
    );

    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
    } catch (PDOException $e) {
        // Do not leak credentials
        http_response_code(500);
        exit('Database unavailable.');
    }
    return $pdo;
}

// --------------------------------------------------------------------------
// Session country list → short URL query
// --------------------------------------------------------------------------

$thisMap      = $thisMap      ?? 'world_map';
$urltoshort   = $urltoshort   ?? '';
$newsession   = '';

$sessionList  = (string)($_SESSION[$thisMap] ?? '');
$countries    = explode('#', $sessionList);

foreach ($countries as $key) {
    if ($key !== '' && $key !== null) {
        $urltoshort .= urlencode($key) . '=y&';
    }
}
$urltoshort .= 'go=1';

if (isset($_GET['go']) && $_GET['go'] === '1') {
    $_SESSION[$thisMap] = '';
    foreach ($_GET as $key => $value) {
        if ($key !== 'go') {
            $newsession .= $key . '#';
        }
    }
    $_SESSION[$thisMap] = $newsession;
}

// --------------------------------------------------------------------------
// Utility helpers (WordPress-derived, modernized)
// --------------------------------------------------------------------------

function stripslashes_deep(mixed $value): mixed
{
    if (is_array($value)) {
        return array_map('stripslashes_deep', $value);
    }
    return is_string($value) ? stripslashes($value) : $value;
}

function wp_parse_str(string $string, array &$array): void
{
    parse_str($string, $array);
    // magic_quotes_gpc is removed in PHP 8 — always off. No stripslashes needed.
}

function parse_args(mixed $args, mixed $defaults = ''): array
{
    if (is_array($args)) {
        $r = $args;
    } else {
        wp_parse_str((string)$args, $r);
    }
    if (is_array($defaults)) {
        return array_merge($defaults, $r);
    }
    return $r;
}

// --------------------------------------------------------------------------
// Form validator (modernized preg_match; kept Indonesian+English messages)
// --------------------------------------------------------------------------

function get_validasi(string $str, array $args = []): string
{
    $kosong     = $args['kosong']     ?? '';
    $type       = $args['type']       ?? '';
    $max        = $args['max']        ?? '';
    $min        = $args['min']        ?? '';
    $equal      = $args['equal']      ?? '';
    $notequal   = $args['notequal']   ?? '';
    $contain    = $args['contain']    ?? '';
    $notcontain = $args['notcontain'] ?? '';
    $msg        = '';

    if ($kosong === 'no' && $str === '') {
        return 'Field cannot be empty.';
    }
    if ($type === 'text'  && is_numeric($str))                          $msg .= 'text only, ';
    if ($type === 'alpha' && !preg_match('/^[0-9a-z]+$/i', $str))       $msg .= 'letters or digits only, ';
    if ($type === 'no'    && !is_numeric($str))                         $msg .= 'numbers only, ';

    if ($type === 'noupper') {
        $strClean = preg_replace('/[^A-Za-z]/', '', $str);
        if ($strClean !== '' && ctype_upper($strClean))                 $msg .= 'not all caps, ';
    }
    if ($type === 'email' && !filter_var($str, FILTER_VALIDATE_EMAIL))  $msg .= 'invalid email, ';
    if ($type === 'url'   && !filter_var($str, FILTER_VALIDATE_URL))    $msg .= 'invalid url ' . $str . ', ';

    if ($max !== '' && strlen($str) > (int)$max) $msg .= 'max ' . $max . ' chars, ';
    if ($min !== '' && strlen($str) < (int)$min) $msg .= 'min ' . $min . ' chars, ';
    if ($equal    !== '' && $str !== $equal)     $msg .= 'mismatch, ';
    if ($notequal !== '' && $str === $notequal)  $msg .= 'already registered, ';
    if ($contain  !== '' && !str_contains($str, (string)$contain))
        $msg .= 'must contain ' . $contain . ', ';
    if ($notcontain !== '') {
        $msg = str_contains($str, (string)$notcontain)
            ? ($msg . 'cannot shorten from: ' . $notcontain . '<br />')
            : '';
    }

    if ($kosong === 'yes' && $str === '') {
        return '';
    }

    if ($msg !== '') {
        $msg = substr_replace($msg, '.', -2, -1);
        $msg = ucfirst(strtolower($msg));
    }
    return $msg;
}

function validasi(string $str, mixed $args = ''): string
{
    $defaults = [
        'kosong' => '', 'type' => '', 'max' => '', 'min' => '',
        'include' => '', 'exclude' => '',
        'equal' => '', 'notequal' => '',
        'contain' => '', 'notcontain' => '',
    ];
    $r = parse_args($args, $defaults);
    return get_validasi($str, $r);
}

// --------------------------------------------------------------------------
// Short-URL backends
// --------------------------------------------------------------------------

function cektkp(string $url = ''): string
{
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL            => $url,
        CURLOPT_FAILONERROR    => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS      => 5,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 3,
        CURLOPT_HEADER         => true,
        CURLOPT_NOBODY         => true,
    ]);
    $result = (string)curl_exec($ch);
    curl_close($ch);

    if (preg_match('/Location:(.*?)\n/', $result, $m)) {
        return trim($m[1]);
    }
    return '';
}

function maketkp(string $domain = '', string $url = '', string $tag = ''): string
{
    $url = urlencode($url);

    $remote = $taken = $match = '';
    switch ($domain) {
        case 'tinyurl.com':
            $remote = 'http://tinyurl.com/create.php?url=' . $url . '&alias=' . $tag;
            $taken  = 'The custom alias you';
            $match  = '/\[<a href="(.*?)"/';
            break;
        case 'bit.ly':
            $remote = 'http://bit.ly/?s=&keyword=' . $tag . '&url=' . $url;
            $taken  = 'The custom keyword you tried to use was already used by someone else';
            $match  = '/<input id="shortened-url" value="(.*?)"/';
            break;
        default:
            return $tag . ' is already taken';
    }

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HEADER         => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERAGENT      => 'Mozilla/5.0',
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_URL            => $remote,
    ]);
    $tkp = (string)curl_exec($curl);
    curl_close($curl);

    if (str_contains($tkp, $taken)) {
        return $tag . ' is already taken';
    }
    if (preg_match($match, $tkp, $m)) {
        return trim($m[1]);
    }
    return '';
}

// --------------------------------------------------------------------------
// Tag handling (PDO + prepared statements)
// --------------------------------------------------------------------------

$url      = false;
$err_url  = false;
$error    = false;
$view     = false;
$lihat    = false;

function cek_tag(string $tag = ''): bool
{
    if ($tag === '') {
        return false;
    }
    $stmt = db()->prepare('SELECT 1 FROM tags WHERE tags = :t LIMIT 1');
    $stmt->execute([':t' => $tag]);
    return (bool)$stmt->fetchColumn();
}

if (isset($_GET['tag'])) {
    $tag = (string)$_GET['tag'];
    if (validasi($tag, 'type=alpha') === '') {
        $stmt = db()->prepare('SELECT tkp FROM tags WHERE tags = :t LIMIT 1');
        $stmt->execute([':t' => $tag]);
        if ($row = $stmt->fetch()) {
            header('Location: ' . $row['tkp']);
            exit;
        }
    } else {
        header('Location: http://' . ($thisDomain ?? ''));
        exit;
    }
}

if (isset($_POST['buattkp'])) {
    $url    = 'http://' . ($thisDomain ?? '') . '/index.php?' . $urltoshort;
    $domain = 'tinyurl.com';
    $tag    = (string)($_POST['tag'] ?? '');

    if ($tag !== '') {
        $tag = strtolower($tag);
        if (validasi($tag, 'type=alpha&min=3&max=30') !== '') {
            $error = 1;
        }
    }

    $err_url = validasi($url, 'type=url&kosong=no');
    if ($err_url !== '') {
        $error = 1;
    }

    if (!$error) {
        if ($domain !== ($thisDomain ?? '')) {
            $res = maketkp($domain, $url, $tag);
            if ($res === $tag . ' is already taken') {
                $err_url .= $res . ' at ' . $domain;
                $error = 1;
            } else {
                $view = '<span class="style10"><a href="' . htmlspecialchars($res, ENT_QUOTES) . '">'
                      . htmlspecialchars($res, ENT_QUOTES) . '</a></span><br><br>';
                $view .= '<a href="javascript:void(0);" onclick="openMail(\'' . htmlspecialchars($res, ENT_QUOTES) . '\')">Share by Email</a> | '
                       . '<a href="javascript:void(0);" onclick="openFacebook(\'' . htmlspecialchars($res, ENT_QUOTES) . '\')">Share to Facebook</a> | '
                       . '<a href="javascript:void(0);" onclick="openTwitter(\'' . htmlspecialchars($res, ENT_QUOTES) . '\')">Share to Twitter</a><br><br>';

                $stmt = db()->prepare('INSERT INTO tags (tags, tkp, status) VALUES (:tag, :url, :status)');
                $stmt->execute([
                    ':tag'    => str_replace('www.', '', $res),
                    ':url'    => $url,
                    ':status' => 'taken',
                ]);
            }
        } elseif ($tag !== '' && $domain === ($thisDomain ?? '')) {
            if (cek_tag($tag)) {
                $view = '<b>' . htmlspecialchars($tag) . '</b> tag not available';
            } else {
                $stmt = db()->prepare('INSERT INTO tags (tags, tkp, status) VALUES (:tag, :url, :status)');
                $stmt->execute([':tag' => $tag, ':url' => $url, ':status' => 'taken']);
                if ($stmt->rowCount() > 0) {
                    $short = 'http://' . $domain . '/' . $tag;
                    $view  = '<input type="text" size="30" value="' . htmlspecialchars($short, ENT_QUOTES) . '"/><br />';
                    $view .= '<a href="javascript:void(0);" onclick="openFacebook(\'' . htmlspecialchars($short, ENT_QUOTES) . '\')">Share to Facebook</a> | '
                           . '<a href="javascript:void(0);" onclick="openTwitter(\'' . htmlspecialchars($short, ENT_QUOTES) . '\')">Share to Twitter</a>';
                }
            }
        } else {
            $seed = strtolower(hash('sha256', $url . microtime(true) . random_bytes(8)));
            $len  = 3;
            do {
                $tag = substr($seed, 0, $len++);
            } while (cek_tag($tag) && $len < 12);

            $stmt = db()->prepare('INSERT INTO tags (tags, tkp, status) VALUES (:tag, :url, :status)');
            $stmt->execute([':tag' => $tag, ':url' => $url, ':status' => 'taken']);
            if ($stmt->rowCount() > 0) {
                $short = 'http://' . ($thisDomain ?? '') . '/' . $tag;
                $view  = '<br><a href="' . htmlspecialchars($short, ENT_QUOTES) . '">' . htmlspecialchars($short) . '</a><br><br>';
                $view .= '<a href="javascript:void(0);" onclick="openFacebook(\'' . htmlspecialchars($short, ENT_QUOTES) . '\')">Share to Facebook</a> | '
                       . '<a href="javascript:void(0);" onclick="openTwitter(\'' . htmlspecialchars($short, ENT_QUOTES) . '\')">Share to Twitter</a>';
            }
        }
    }
}

if (isset($_POST['cektkp'])) {
    $url   = $_SERVER['PHP_SELF'] ?? '';
    $hasil = cektkp($url);
    $lihat = '<div class="border p5"><strong>' . htmlspecialchars($url) . '</strong> is redirected to <a href="'
           . htmlspecialchars($hasil, ENT_QUOTES) . '">' . htmlspecialchars($hasil) . '</a></div>';
}

function lastcreated(): void
{
    $stmt = db()->query('SELECT tags, tkp FROM tags ORDER BY ID DESC LIMIT 10');
    foreach ($stmt as $row) {
        if (!empty($row['tkp'])) {
            echo '<li><a href="' . htmlspecialchars($row['tags'], ENT_QUOTES)
               . '" target="_blank" rel="noopener">' . htmlspecialchars($row['tags']) . '</a></li>';
        }
    }
}
