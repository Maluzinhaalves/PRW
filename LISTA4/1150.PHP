<?php
$x = intval(fgets(STDIN));
$z = intval(fgets(STDIN));
while ($z <= $x) {
    $z = intval(fgets(STDIN));
}
$soma = $x;
$qtd = 1;

while ($soma <= $z) {
    $x++;
    $soma += $x;
    $qtd++;
}

echo $qtd . "\n";

?>