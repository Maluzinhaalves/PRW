<?php

$operacao = trim(fgets(STDIN));

$matriz = array();
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $matriz[$i][$j] = floatval(trim(fgets(STDIN)));
    }
}

$soma = 0;
$qtd = 0;
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        if ($j > 11 - $i) {
            $soma += $matriz[$i][$j];
            $qtd++;
        }
    }
}

if ($operacao == 'S') {
    printf("%.1f\n", $soma);
} elseif ($operacao == 'M') {
    $media = $soma / $qtd;
    printf("%.1f\n", $media);
}

?>