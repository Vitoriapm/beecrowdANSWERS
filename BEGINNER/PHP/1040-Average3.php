<?php

$notes = explode(" ", readLine());

//PHP_ROUND_HALF_DOWN to round to the min value
$media = round((($notes[0]*2) + ($notes[1]*3) + ($notes[2]*4) + $notes[3])/10, 1, PHP_ROUND_HALF_DOWN);

//number_format to show at leat 1 decimal digit
echo "Media: " . number_format($media,1) . "\n";

if($media >= 0 && $media <=10){
    if($media >= 7){
        echo "Aluno aprovado.\n";
    }elseif($media < 5){
        echo "Aluno reprovado.\n";
    }else{
        echo "Aluno em exame.\n";
        $exam = readLine();
        echo "Nota do exame: $exam\n";
        $finalMedia = round(($exam + $media)/2, 1, PHP_ROUND_HALF_DOWN);;
        if($finalMedia >= 5){
            echo "Aluno aprovado.\n";
        }else{
            echo "Aluno reprovado.\n";
        }
        echo "Media final: " . number_format($finalMedia,1) . "\n";
    }
}

?>
