<?php
error_reporting(0);

/* Session start */
session_start();

$countries = $_SESSION[$thisMap];
$countries = explode('#',$countries);
foreach($countries AS $key) $i++;

$i--;

if($i == 1)
{
	$areasVisited = $i.' country';
	$regionsCount = $i.' African country';
}
else
{
	$areasVisited = $i.' countries';
	$regionsCount = $i.' African countries';
}

?>