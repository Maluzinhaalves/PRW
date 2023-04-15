<?php

function quantidadeLeds($numero) {
 
  $ledsPorDigito = array(6, 2, 5, 5, 4, 5, 6, 3, 7, 6);

 
  $numeroString = strval($numero);
  $quantidadeLeds = 0;
  for ($i = 0; $i < strlen($numeroString); $i++) {

    $digito = intval($numeroString[$i]);
    $quantidadeLeds += $ledsPorDigito[$digito];
  }
  return $quantidadeLeds;
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
  $numero = trim(fgets(STDIN));
  $quantidadeLeds = quantidadeLeds($numero);
  echo $quantidadeLeds . " leds\n";
}

?>