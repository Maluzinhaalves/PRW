<?php

$n = intval(fgets(STDIN));

$x = explode(" ", fgets(STDIN));

$min = $x[0];
$pos = 0;

for ($i = 1; $i < $n; $i++) {
    if ($x[$i] < $min) {
        $min = $x[$i];
        $pos = $i;
    }
}

echo "Menor valor: " . $min . "\n";
echo "Posicao: " . $pos . "\n";
?>