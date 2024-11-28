<?php
$itens = array(1 => 4, 2 => 4.5, 3 => 5, 4 => 2, 5 => 1.5);
    
$x = explode(" ", fgets(STDIN));
    
foreach($itens as $code => $price){
    if($x[0] == $code){
        $total = $x[1] * $price;
        echo "Total: R$ " . number_format($total, 2) . "\n";
    }
}
?>
