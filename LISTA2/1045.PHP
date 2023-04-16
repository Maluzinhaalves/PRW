<?php
fscanf(STDIN, "%f %f %f", $A, $B, $C);

$lados = [$A, $B, $C];
rsort($lados);
list($A, $B, $C) = $lados;

if ($A >= $B + $C) {
    echo "NAO FORMA TRIANGULO\n";
} else {
    if (pow($A, 2) == pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO RETANGULO\n";
    }
    if (pow($A, 2) > pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO OBTUSANGULO\n";
    }
    if (pow($A, 2) < pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO ACUTANGULO\n";
    }
    if ($A == $B && $B == $C) {
        echo "TRIANGULO EQUILATERO\n";
    }
    if (($A == $B && $A != $C) || ($A == $C && $A != $B) || ($B == $C && $B != $A)) {
        echo "TRIANGULO ISOSCELES\n";
    }
}
?>