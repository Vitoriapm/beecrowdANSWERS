<?php

$numbers = explode(" ", readLine());
$numbers[0] = (int)$numbers[0];
$numbers[1] = (int)$numbers[1];
$numbers[2] = (int)$numbers[2];
$unArray = $numbers;

for ($i=0; $i<count($numbers)-1; $i++){
    for ($j = 0; $j < count($numbers) - 1; $j++){
        if ($numbers[$j] > $numbers[$j + 1]){
            $aux = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $aux;
        }
    }
}

foreach ($numbers as $number) {
    echo $number . "\n";
}

echo "\n";

foreach ($unArray as $unNumber) {
    echo $unNumber . "\n";
}
?>
