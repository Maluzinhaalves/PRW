<?php

$pares = array();
$impares = array();
$countPares = 0;
$countImpares = 0;

for ($i = 0; $i < 15; $i++) {
  $valor = intval(fgets(STDIN));
  if ($valor % 2 == 0) {
    array_push($pares, $valor);
    $countPares++;
    if ($countPares == 5) {
      for ($j = 0; $j < 5; $j++) {
        echo "par[{$j}] = {$pares[$j]}\n";
      }
      $countPares = 0;
      $pares = array();
    }
  } else {
    array_push($impares, $valor);
    $countImpares++;
    if ($countImpares == 5) {
      for ($j = 0; $j < 5; $j++) {
        echo "impar[{$j}] = {$impares[$j]}\n";
      }
      $countImpares = 0;
      $impares = array();
    }
  }
}

for ($i = 0; $i < $countImpares; $i++) {
  echo "impar[{$i}] = {$impares[$i]}\n";
}

for ($i = 0; $i < $countPares; $i++) {
  echo "par[{$i}] = {$pares[$i]}\n";
}

?>