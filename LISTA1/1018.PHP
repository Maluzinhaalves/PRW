<?php

// Lê o valor inteiro
$valor = intval(fgets(STDIN));

// Inicializa o array com a quantidade de notas
$notas = array(100, 50, 20, 10, 5, 2, 1);

// Imprime o valor lido
echo $valor . "\n";

// Percorre o array de notas e calcula a quantidade mínima de cada nota necessária
foreach ($notas as $nota) {
  $quantidade = intdiv($valor, $nota);
  echo $quantidade . " nota(s) de R$ " . $nota . ",00\n";
  $valor -= $quantidade * $nota;
}
?>