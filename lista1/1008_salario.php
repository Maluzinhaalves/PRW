<?php

$numero_funcionario = intval(fgets(STDIN));
$horas_trabalhadas = intval(fgets(STDIN));
$valor_hora = floatval(fgets(STDIN));

$salario = $horas_trabalhadas * $valor_hora;

echo "NUMBER = $numero_funcionario\n";
echo "SALARY = " . number_format($salario, 2, '.', '') . "\n";

?>

 