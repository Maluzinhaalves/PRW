<?php

$notas = fgets(STDIN);
$notas = explode(" ", $notas);
$n1 = floatval($notas[0]);
$n2 = floatval($notas[1]);
$n3 = floatval($notas[2]);
$n4 = floatval($notas[3]);


$media = ($n1*2 + $n2*3 + $n3*4 + $n4*1) / 10;
$media = number_format(intval($media*10)/10,1,".","");

echo "Media: $media\n";
if($media>=7){
    echo "Aluno aprovado.\n";
} else if ($media <5){
    echo "Aluno reprovado.\n";
} 
else {
    echo "Aluno em exame.\n";
    $ne = floatval(fgets(STDIN));
    echo "Nota do exame: ".number_format($ne,1,".","")."\n";
    $media = number_format(($media + $ne)/2,1,".","");
    
    if($media >= 5){
        echo "Aluno aprovado.\n";
    } else {
        echo "Aluno reprovado.\n";
    }
    echo "Media final: $media\n";
}
?>