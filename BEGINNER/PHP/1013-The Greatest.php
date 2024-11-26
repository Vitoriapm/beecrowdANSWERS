<?php
    $numbers = explode(" ", readLine());
    $maiorAB = ($numbers[0] + $numbers[1] + abs($numbers[0] - $numbers[1]))/2;
    $maior = ($maiorAB + $numbers[2] + abs($maiorAB - $numbers[2]))/2;
    
    echo "$maior eh o maior\n";
?>
