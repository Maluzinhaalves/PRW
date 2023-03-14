<?php

$numeroFuncionario = intval(fgets(STDIN));
$horasTrabalhadas = intval(fgets(STDIN));
$valorHora = floatval(fgets(STDIN));

$salario = $horasTrabalhadas * $valorHora;

echo "NUMBER = " . $numeroFuncionario . "\n";
echo "SALARY = U$ " . number_format($salario, 2, '.', '') . "\n";

?>


 