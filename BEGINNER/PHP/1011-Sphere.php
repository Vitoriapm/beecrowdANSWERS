<?php
    $r = (int)readLine();
    $pi = 3.14159;
    $volume = (4/3)*$pi*($r**3);
    
    echo "VOLUME = " . number_format($volume, 3, ".", "") . "\n";
?>
