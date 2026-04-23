<?php
declare(strict_types=1);

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$thisMap   = $thisMap ?? 'world_map';
$raw       = (string)($_SESSION[$thisMap] ?? '');
$countries = array_filter(explode('#', $raw), static fn($v) => $v !== '');
$i         = count($countries);

$areasVisited = $i === 1 ? $i . ' country'      : $i . ' countries';
$regionsCount = $i === 1 ? $i . ' World country' : $i . ' World countries';
