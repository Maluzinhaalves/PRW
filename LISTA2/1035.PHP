<?php
// Lê os valores de entrada
list($a, $b, $c, $d) = fscanf(STDIN, "%d %d %d %d");

// Verifica as condições para aceitar os valores
if ($b > $c && $d > $a && ($c + $d) > ($a + $b) && $c > 0 && $d > 0 && $a % 2 == 0) {
    echo "Valores aceitos\n";
} else {
    echo "Valores nao aceitos\n";
}
?>