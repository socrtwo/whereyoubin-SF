<?php
declare(strict_types=1);

define('BASEDIR', 'wherehaveibeen.info');
$LANGUAGE = 'english';

define('MYSQL_HOST', 'mysql.wherehaveibeen.info');
define('MYSQL_USER', 'wherepermurl');
define('MYSQL_PASS', 'change-me');
define('MYSQL_DB',   'wherhaveibeen_permurl');

define('OWN_DOMAIN', 'wherehaveibeen.info'); // your domain, no http://

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
$pythonPath = '';
