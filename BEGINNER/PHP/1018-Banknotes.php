<?php

$number = readLine();
echo "$number\n";

echo floor($number/100) . " nota(s) de R$ 100,00\n";
$number = $number%100;

echo floor($number/50) . " nota(s) de R$ 50,00\n";
$number = $number%50;

echo floor($number/20) . " nota(s) de R$ 20,00\n";
$number = $number%20;

echo floor($number/10) . " nota(s) de R$ 10,00\n";
$number = $number%10;

echo floor($number/5) . " nota(s) de R$ 5,00\n";
$number = $number%5;

echo floor($number/2) . " nota(s) de R$ 2,00\n";
$number = $number%2;

echo floor($number) . " nota(s) de R$ 1,00\n";

?>
