<?php

$x = (int) readline();
$y = (int) readline();

$soma = 0;

if ($x < $y) {
    $menor = $x;
    $maior = $y;
} else {
    $menor = $y;
    $maior = $x;
}
for ($i = $menor; $i <= $maior; $i++) {

    if ($i % 13 != 0) {
        $soma += $i;
    }
}

// Imprime a soma
echo $soma . "\n";

?>
