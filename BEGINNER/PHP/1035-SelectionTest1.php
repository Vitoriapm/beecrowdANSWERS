<?php

$numbers = explode(" ", readLine());

//0 1 2 3
//a b c d

if ($numbers[1] > $numbers[2] && 
$numbers[3] > $numbers[0] && 
($numbers[2] + $numbers[3]) > ($numbers[0] + $numbers[1]) && 
$numbers[2] > 0 &&
$numbers[3] > 0 && 
$numbers[0] % 2 == 0){
    echo "Valores aceitos\n";
}else{
    echo "Valores nao aceitos\n";
}
    
?>
