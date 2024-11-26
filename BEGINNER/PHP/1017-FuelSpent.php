<?php
    $hours = readLine();
    $avgSpeed = readLine();
    
    $liters = ($avgSpeed/12) * $hours;
    
    echo number_format($liters, 3, ".", "") . "\n";
?>
