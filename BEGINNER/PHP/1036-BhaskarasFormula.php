<?php

$numbers = explode(" ", readLine());

if($numbers[0]==0 || ($numbers[1] **2 - 4 * $numbers[0] * $numbers[2]) < 0){
    echo "Impossivel calcular\n";
}else{
    $squareRoot = sqrt($numbers[1] **2 - 4 * $numbers[0] * $numbers[2]);
    echo "R1 = " . number_format(((-$numbers[1] + $squareRoot) / (2 * $numbers[0])), 5) . "\n";
    echo "R2 = " . number_format(((-$numbers[1] - $squareRoot) / (2 * $numbers[0])), 5) . "\n";
}

?>
