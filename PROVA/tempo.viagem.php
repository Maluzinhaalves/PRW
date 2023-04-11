<?php

$velocidade = floatval(sprintf('%.2f', readline()));
$distancia = floatval(sprintf('%.2f', readline()));
$consumo = floatval(sprintf('%.2f', readline()));

$tempo = $distancia / $velocidade;
$combustivel = $distancia / $consumo;

echo sprintf('Total horas: %.2f', $tempo) . "\n";
echo sprintf('Total combustivel: %.2f', $combustivel) . "\n";

?>