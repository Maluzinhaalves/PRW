<?php

$coluna = intval(trim(fgets(STDIN)));
$operacao = trim(fgets(STDIN));

$matriz = array();
for ($i = 0; $i < 12; $i++) {
    $linha = array();
    for ($j = 0; $j < 12; $j++) {
        $valor = floatval(trim(fgets(STDIN)));
        $linha[] = $valor;
    }
    $matriz[] = $linha;
}

$soma = 0;
for ($i = 0; $i < 12; $i++) {
    $soma += $matriz[$i][$coluna];
}

if ($operacao == 'M') {
    $resultado = $soma / 12.0;
} else {
    $resultado = $soma;
}

printf("%.1f\n", $resultado);

?>