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
	$areasVisited = $i.'  中国各省 (Chinese Province)';
	$regionsCount = $i.' Chinese province';
}
else
{
	$areasVisited = $i.'  中国各省 (Chinese Provinces)';
	$regionsCount = $i.' Chinese provinces';
}

?>