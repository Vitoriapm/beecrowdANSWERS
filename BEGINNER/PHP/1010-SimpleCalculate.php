<?php
    //explode is for read a single line with more than 1 value
    $p1 = explode(" ", readLine());
    $p2 = explode(" ", readLine());

    //the values read became an array, so we need say the positions
    $result = ($p1[1] * $p1[2]) + ($p2[1] * $p2[2]);
    echo "VALOR A PAGAR: R$ " . number_format($result, 2, ".", "") . "\n";
?>
