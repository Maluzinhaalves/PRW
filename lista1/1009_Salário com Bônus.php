<?php

$nome = readline();
$salarioFixo = floatval(readline());
$totalVendas = floatval(readline());

$comissao = 0.15 * $totalVendas;

$totalReceber = $salarioFixo + $comissao;

printf("TOTAL = R$ %.2f\n", $totalReceber);
?>