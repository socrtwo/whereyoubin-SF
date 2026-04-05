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
	$areasVisited = $i.' State';
	$regionsCount = $i.' American state';
}
else
{
	$areasVisited = $i.' States';
	$regionsCount = $i.' American states';
}

?>