<?php


$valores = fgets(STDIN);

$valores = explode(" ", $valores);

$a = intval($valores[0]);
$b = intval($valores[1]);
$c = intval($valores[2]);
$menor = min($a, $b, $c);
$maior = max($a, $b, $c);
$meio = ($a + $b + $c) - $menor - $maior;

echo $menor . "\n";
echo $meio . "\n";
echo $maior . "\n";
echo "\n";
echo $a . "\n";
echo $b . "\n";
echo $c . "\n";

?>