<?php

$operacao = trim(fgets(STDIN));

$matriz = array();
for ($i = 0; $i < 12; $i++) {
  $linha = array();
  for ($j = 0; $j < 12; $j++) {
    $linha[] = floatval(trim(fgets(STDIN)));
  }
  $matriz[] = $linha;
}

$soma = 0;
$contador = 0;
for ($i = 0; $i < 6; $i++) {
  for ($j = $i + 1; $j < 11 - $i; $j++) {
    $soma += $matriz[$i][$j];
    $contador++;
  }
}
if ($operacao == 'M') {
  $resultado = $soma / $contador;
} else {
  $resultado = $soma;
}

echo number_format($resultado, 1, '.', '') . "\n";

?>