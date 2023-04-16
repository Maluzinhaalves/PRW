<?php

$operacao = readline();

$matriz = array();
for ($i = 0; $i < 12; $i++) {
    $linha = array();
    for ($j = 0; $j < 12; $j++) {
        $linha[] = (float) readline();
    }
    $matriz[] = $linha;
}

$soma = 0;
$contador = 0;
for ($i = 1; $i < 12; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $soma += $matriz[$i][$j];
        $contador++;
    }
}

if ($operacao == "S") {
    echo number_format($soma, 1, ".", "") . "\n";
} else if ($operacao == "M") {
    $media = $soma / $contador;
    echo number_format($media, 1, ".", "") . "\n";
}

?>