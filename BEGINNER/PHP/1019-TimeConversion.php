<?php

$time = readLine();

$hours = $time/3600;
$time = $time%3600;

$minutes = $time/60;
$time = $time%60;

echo (int)$hours . ":" . (int)$minutes . ":" . (int)$time . "\n";

?>
