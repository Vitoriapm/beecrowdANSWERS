<?php

$number = readLine();

if($number >= 0 && $number <=100){
    if($number <= 25){
        echo "Intervalo [0,25]\n";
    }elseif($number <= 50){
        echo "Intervalo (25,50]\n";
    }elseif($number <= 75){
        echo "Intervalo (50,75]\n";
    }else{
        echo "Intervalo (75,100]\n";
    }
}else{
    echo "Fora de intervalo\n";
}

?>
