<?php
    $number = (int)readLine();
    $hours = (int)readLine();
    $amountHour = (float)readLine();
    $salary = number_format($hours * $amountHour, 2, ".", "");
    
    echo "NUMBER = $number\n";
    echo "SALARY = U$ $salary\n";
?>
