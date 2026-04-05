<?php
error_reporting(0);

/* Session start */
session_start();

$countries = $_SESSION[$thisMap];
$countries = explode('#',$countries);

foreach($countries AS $key) $i++;

$i--;

if ($i == 1)
{
	$areasVisited = $i.' country';
	$regionsCount = $i.' World country';
}
else
{
	$areasVisited = $i.' countries';
	$regionsCount = $i.' World countries';
}

?>
