<?php

list($hi, $mi, $hf, $mf) = explode(" ", fgets(STDIN));

$inicio = $hi * 60 + $mi; 
$fim = $hf * 60 + $mf; 
if ($inicio >= $fim) { 
    $fim += 1440; 
}

$duracao = $fim - $inicio; 

$horas = intdiv($duracao, 60); 
$minutos = $duracao % 60; 

echo "O JOGO DUROU " . $horas . " HORA(S) E " . $minutos . " MINUTO(S)\n";

?>