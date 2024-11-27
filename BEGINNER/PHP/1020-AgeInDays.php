<?php

$ageDays = readLine();

$ano = $ageDays/365;
$ageDays = $ageDays%365;

$mes = $ageDays/30;
$ageDays = $ageDays%30;

echo (int)$ano . " ano(s)\n";
echo (int)$mes . " mes(es)\n";
echo (int)$ageDays . " dia(s)\n";

?>
