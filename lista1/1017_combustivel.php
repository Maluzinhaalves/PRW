<?php

$tempo = intval(fgets(STDIN));
$velocidade = intval(fgets(STDIN));

$distancia = $tempo * $velocidade;
$litros = $distancia / 12;

echo number_format($litros, 3, '.', '') . "\n";

?>
