<?php

fscanf(STDIN, "Dia %d", $diaInicio);
fscanf(STDIN, "%d : %d : %d", $horaInicio, $minInicio, $segInicio);
fscanf(STDIN, "Dia %d", $diaFim);
fscanf(STDIN, "%d : %d : %d", $horaFim, $minFim, $segFim);


$tempoInicio = $diaInicio * 24 * 60 * 60 + $horaInicio * 60 * 60 + $minInicio * 60 + $segInicio;
$tempoFim = $diaFim * 24 * 60 * 60 + $horaFim * 60 * 60 + $minFim * 60 + $segFim;
$duracaoSegundos = $tempoFim - $tempoInicio;


$dias = (int) ($duracaoSegundos / (24 * 60 * 60));
$duracaoSegundos -= $dias * 24 * 60 * 60;
$horas = (int) ($duracaoSegundos / (60 * 60));
$duracaoSegundos -= $horas * 60 * 60;
$minutos = (int) ($duracaoSegundos / 60);
$duracaoSegundos -= $minutos * 60;
$segundos = $duracaoSegundos;


printf("%d dia(s)\n", $dias);
printf("%d hora(s)\n", $horas);
printf("%d minuto(s)\n", $minutos);
printf("%d segundo(s)\n", $segundos);
?>
