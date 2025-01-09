<?php

$hours = explode(" ", readline());

$inicio = (int)$hours[0];
$fim = (int)$hours[1];

if($inicio >= $fim){
    $total = (24-$inicio) + $fim;
}else{
    $total= ($fim-$inicio);
}

echo "O JOGO DUROU {$total} HORA(S)\n";

?>
