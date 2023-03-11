<?php

$valores = explode(" ", readline());

$a = intval($valores[0]);
$b = intval($valores[1]);
$c = intval($valores[2]);

$maiorAB = ($a + $b + abs($a - $b)) / 2;
$maior = ($maiorAB + $c + abs($maiorAB - $c)) / 2;

echo $maior . " eh o maior" . PHP_EOL;

?>

