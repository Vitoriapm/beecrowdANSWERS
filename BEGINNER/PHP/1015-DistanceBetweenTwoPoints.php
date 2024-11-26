<?php
    $p1 = explode(" ", readLine());
    $p2 = explode(" ", readLine());
    
    $distance = sqrt(($p2[0]-$p1[0])**2 + ($p2[1]-$p1[1])**2);
    
    echo number_format($distance, 4, ".", "") . "\n";
?>
