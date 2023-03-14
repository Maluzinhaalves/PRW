<?php

// Lê o valor inteiro de idade em dias
$idadeDias = (int) fgets(STDIN);

// Calcula a idade em anos, meses e dias
$anos = floor($idadeDias / 365);
$idadeDias -= $anos * 365;
$meses = floor($idadeDias / 30);
$idadeDias -= $meses * 30;
$dias = $idadeDias;

// Imprime a idade no formato anos, meses e dias
echo "$anos ano(s)\n";
echo "$meses mes(es)\n";
echo "$dias dia(s)\n";

