<?php

$tempo = intval(fgets(STDIN));
$velocidadeMedia = intval(fgets(STDIN));

$distancia = $tempo * $velocidadeMedia;

$litros = $distancia / 12;

printf("%.3f\n", $litros);

?>