<?php

$numbers = explode(" ", readline());
$a = (int)$numbers[0];
$b = (int)$numbers[1];

//verificar o maior valor para realizar a divisão de maneira correta
if($a > $b){
    $maior = $a;
    $menor = $b;
}else{
    $maior = $b;
    $menor = $a;
}

//se o resto da divisão entre os dois números for 0, então serão múltiplos
if($maior%$menor === 0){
    echo "Sao Multiplos\n";
}else{
    echo "Nao sao Multiplos\n";
}

?>
