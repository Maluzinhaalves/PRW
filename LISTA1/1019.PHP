<?php

$tempoSegundos = intval(fgets(STDIN));

$horas = intdiv($tempoSegundos, 3600);
$minutos = intdiv(($tempoSegundos % 3600), 60);
$segundos = $tempoSegundos % 60;

echo $horas . ":" . $minutos . ":" . $segundos . "\n";
?>