<?php

$numbers = explode(" ", fgets(STDIN));
$a = $numbers[0];
$b = $numbers[1];
$c = $numbers[2];

if(($a+$b)>$c && ($b+$c)>$a && ($c+$a)>$b){
    $per = $a+$b+$c;
    echo "Perimetro = " . number_format($per, 1, '.', ',') . "\n";
}else{
    $area = .5*($a+$b)*$c;
    echo "Area = " . number_format($area, 1 ,'.', ',') . "\n";
}

?>
