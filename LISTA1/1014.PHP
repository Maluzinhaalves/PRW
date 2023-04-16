<?php

$distancia = (int) fgets(STDIN);
$combustivel = (float) fgets(STDIN);

$consumo_medio = $distancia / $combustivel;

echo number_format($consumo_medio, 3, '.', '') . " km/l\n";

?>