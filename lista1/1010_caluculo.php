<?php

list($cod1, $qtd1, $val1) = sscanf(readline(), "%d %d %f");

list($cod2, $qtd2, $val2) = sscanf(readline(), "%d %d %f");

$total = $qtd1 * $val1 + $qtd2 * $val2;

echo "VALOR A PAGAR: R$ " . number_format($total, 2, '.', '') . "\n";
?>
