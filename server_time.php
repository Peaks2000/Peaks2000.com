<?php
date_default_timezone_set('Europe/London');
$serverTime = new DateTime();
echo json_encode([
    'hour' => (int)$serverTime->format('H'),
    'minute' => (int)$serverTime->format('i'),
    'second' => (int)$serverTime->format('s'),
    'date' => $serverTime->format('Y-m-d')
]);
?>
