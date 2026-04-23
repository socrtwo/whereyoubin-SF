<?php
/*
 * Modernized installer — PHP 8.x safe.
 * Writes config.php as valid PHP, creates the `tags` table via PDO
 * and seeds the schema needed by the modern travel-log app.
 */
declare(strict_types=1);

// All constants written into config.php are escaped with var_export so a
// stray quote in a password can never break the file (PHP-update immune).
function write_config(array $cfg): void
{
    $tpl = <<<'PHP'
<?php
declare(strict_types=1);

define('BASEDIR',   %BASEDIR%);
$LANGUAGE = %LANGUAGE%;

define('MYSQL_HOST', %HOST%);
define('MYSQL_USER', %USER%);
define('MYSQL_PASS', %PASS%);
define('MYSQL_DB',   %DB%);

define('OWN_DOMAIN', %DOMAIN%);

define('OWN_DOMAIN_AFRICA', OWN_DOMAIN . '/maps/africamap');
define('OWN_DOMAIN_CANADA', OWN_DOMAIN . '/maps/canadamap');
define('OWN_DOMAIN_CHINA',  OWN_DOMAIN . '/maps/chinamap');
define('OWN_DOMAIN_EUROPE', OWN_DOMAIN . '/maps/europemap');
define('OWN_DOMAIN_INDIA',  OWN_DOMAIN . '/maps/indiamap');
define('OWN_DOMAIN_US',     OWN_DOMAIN . '/maps/usmap');
define('OWN_DOMAIN_ASIA',   OWN_DOMAIN . '/maps/asiamap');

$worldCookie  = 'world_map';
$africaCookie = 'africa_map';
$canadaCookie = 'canada_map';
$chinaCookie  = 'china_map';
$europeCookie = 'europe_map';
$indiaCookie  = 'india_map';
$usCookie     = 'us_map';
$asiaCookie   = 'asia_map';

$cwd        = getcwd();
$pythonPath = %PYTHON%;
PHP;

    $out = strtr($tpl, [
        '%BASEDIR%'  => var_export(rtrim($cfg['basedir'], '/'), true),
        '%LANGUAGE%' => var_export($cfg['language'], true),
        '%HOST%'     => var_export($cfg['HOST'], true),
        '%USER%'     => var_export($cfg['USER'], true),
        '%PASS%'     => var_export($cfg['PASSWORD'], true),
        '%DB%'       => var_export($cfg['DATEBASE'], true),
        '%DOMAIN%'   => var_export(rtrim($cfg['basedir'], '/'), true),
        '%PYTHON%'   => var_export($cfg['pythonDir'] ?? '', true),
    ]);

    file_put_contents(__DIR__ . '/config.php', $out);
}

if (($_POST['install'] ?? '') === 'Done') {
    $required = ['basedir', 'language', 'HOST', 'USER', 'PASSWORD', 'DATEBASE'];
    foreach ($required as $k) {
        if (!isset($_POST[$k])) { http_response_code(400); exit('Missing field: ' . htmlspecialchars($k)); }
    }

    write_config($_POST);

    require __DIR__ . '/config.php';
    require __DIR__ . '/include.php';

    db()->exec("CREATE TABLE IF NOT EXISTS `tags` (
        `ID`     bigint(20) NOT NULL AUTO_INCREMENT,
        `tags`   varchar(50) NOT NULL,
        `tkp`    varchar(2222) NOT NULL,
        `price`  bigint(20) NOT NULL DEFAULT 0,
        `status` varchar(20) NOT NULL,
        PRIMARY KEY (`ID`),
        UNIQUE KEY `tags` (`tags`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    // Modern travel-log schema (used by app/)
    db()->exec("CREATE TABLE IF NOT EXISTS `trips` (
        `id`          bigint(20) NOT NULL AUTO_INCREMENT,
        `user_id`     varchar(64) NOT NULL,
        `title`       varchar(255) NOT NULL,
        `country`     varchar(2) DEFAULT NULL,
        `location`    varchar(255) DEFAULT NULL,
        `latitude`    decimal(10,6) DEFAULT NULL,
        `longitude`   decimal(10,6) DEFAULT NULL,
        `visited_on`  date DEFAULT NULL,
        `rating`      tinyint(1) DEFAULT 0,
        `notes`       text,
        `photo_path`  varchar(500) DEFAULT NULL,
        `created_at`  timestamp DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`),
        KEY `user_id` (`user_id`),
        KEY `country` (`country`),
        KEY `visited_on` (`visited_on`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

    header('Location: http://' . rtrim($_POST['basedir'], '/') . '/index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Where Have I Been — Installation</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="install-page">
    <main class="install-card">
        <h1>Installation</h1>
        <?php if (file_exists(__DIR__ . '/config.php')): ?>
            <p class="warn">To re-install, delete <code>config.php</code>.</p>
        <?php else: ?>
            <form action="install.php" method="post" autocomplete="off">
                <label>Language
                    <select name="language">
                        <option value="english">English</option>
                        <option value="polish">Polish</option>
                    </select>
                </label>
                <label>Base domain
                    <input name="basedir" type="text"
                           value="<?= htmlspecialchars(($_SERVER['HTTP_HOST'] ?? '') . dirname(rtrim($_SERVER['PHP_SELF'] ?? '', '/')), ENT_QUOTES) ?>" required>
                </label>
                <label>MySQL host     <input name="HOST" value="localhost" required></label>
                <label>MySQL user     <input name="USER" required></label>
                <label>MySQL password <input name="PASSWORD" type="password"></label>
                <label>MySQL database <input name="DATEBASE" required></label>
                <input type="hidden" name="pythonDir" value="/usr/bin/python3">
                <button type="submit" name="install" value="Done">Install</button>
            </form>
        <?php endif; ?>
    </main>
</body>
</html>
