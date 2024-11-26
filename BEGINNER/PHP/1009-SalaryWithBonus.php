<?php
    $name = readLine();
    $salary = (float)readLine();
    $sales = (float)readLine();
    
    //first, we need use PHP_ROUND_HALF_EVEN to get the right result number
    $total = round(($sales * .15)+$salary, 2, PHP_ROUND_HALF_EVEN); 
    
    //than we need number_format to show 2 precision values for int numbers
    echo "TOTAL = R$ " . number_format($total, 2, ".", "") ."\n";
?>
