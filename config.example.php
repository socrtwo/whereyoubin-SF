<?php
	define('BASEDIR', 'wherehaveibeen.info');
	$LANGUAGE='english';
	//dbconnect('mysql.wherehaveibeen.info', 'wherepermurl', 'dfg42!Edlg%', 'wherhaveibeen_permurl');
	define('MYSQL_HOST','mysql.wherehaveibeen.info');
	define('MYSQL_USER','wherepermurl');
	define('MYSQL_PASS','dfg42!Edlg%');
	define('MYSQL_DB','wherhaveibeen_permurl');
	
	define('OWN_DOMAIN', 'wherehaveibeen.info'); //yourdomain, do not include http://

	define('OWN_DOMAIN_AFRICA', OWN_DOMAIN . '/maps/africamap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_CANADA', OWN_DOMAIN . '/maps/canadamap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_CHINA', OWN_DOMAIN . '/maps/chinamap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_EUROPE', OWN_DOMAIN . '/maps/europemap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_INDIA', OWN_DOMAIN . '/maps/indiamap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_US', OWN_DOMAIN . '/maps/usmap'); //yourdomain, do not include http://
	define('OWN_DOMAIN_ASIA', OWN_DOMAIN . '/maps/asiamap'); //yourdomain, do not include http://

	$worldCookie  = "world_map";
	$africaCookie = "africa_map";
	$canadaCookie = "canada_map";
	$chinaCookie  = "china_map";
	$europeCookie = "europe_map";
	$indiaCookie  = "india_map";
	$usCookie     = "us_map";
	$asiaCookie   = "asia_map";

	$cwd = getcwd();

	$pythonPath   = "";

	?>