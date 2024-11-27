<?php

$number = readLine()*100;

echo "NOTAS:\n";
echo floor($number/10000) . " nota(s) de R$ 100.00\n";
$number = $number%10000;

echo floor($number/5000) . " nota(s) de R$ 50.00\n";
$number = $number%5000;

echo floor($number/2000) . " nota(s) de R$ 20.00\n";
$number = $number%2000;

echo floor($number/1000) . " nota(s) de R$ 10.00\n";
$number = $number%1000;

echo floor($number/500) . " nota(s) de R$ 5.00\n";
$number = $number%500;

echo floor($number/200) . " nota(s) de R$ 2.00\n";
$number = $number%200;

echo "MOEDAS:\n";
echo floor($number/100) . " moeda(s) de R$ 1.00\n";
$number = $number%100;

echo floor($number/50) . " moeda(s) de R$ 0.50\n";
$number = $number%50;

echo floor($number/25) . " moeda(s) de R$ 0.25\n";
$number = $number%25;

echo floor($number/10) . " moeda(s) de R$ 0.10\n";
$number = $number%10;

echo floor($number/5) . " moeda(s) de R$ 0.05\n";
$number = $number%5;

echo floor($number) . " moeda(s) de R$ 0.01\n";

?>
