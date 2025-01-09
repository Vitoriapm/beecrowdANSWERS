<?php

$numbers = explode(" ", readline());

//ordenar o array para que o A seja o número maior
sort($numbers);
$c = (float)$numbers[0];
$b = (float)$numbers[1];
$a = (float)$numbers[2];

if($a >= ($b+$c)){
    echo "NAO FORMA TRIANGULO\n";
}else{
    //tipo do triângulo
    if(($a**2) == (($b**2) + ($c**2))){
        echo "TRIANGULO RETANGULO\n";
    }elseif(($a**2) > (($b**2) + ($c**2))){
        echo "TRIANGULO OBTUSANGULO\n";
    }elseif(($a**2) < (($b**2) + ($c**2))){
        echo "TRIANGULO ACUTANGULO\n";
    }
    
    //tamanhos iguais
    if(($a == $b) && ($b == $c)){
        echo "TRIANGULO EQUILATERO\n";
    }elseif(($a == $b) && ($a != $c) || ($b == $c) && ($b != $a) || ($c == $a) && ($c != $b)){
        echo "TRIANGULO ISOSCELES\n";
    }
}

?>
