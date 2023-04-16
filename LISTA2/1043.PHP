<?php
fscanf(STDIN, "%f %f %f", $A, $B, $C);

if ($A + $B > $C && $A + $C > $B && $B + $C > $A) {
    $perimetro = $A + $B + $C;
    echo "Perimetro = " . number_format($perimetro, 1) . "\n";
} else {
    $area = (($A + $B) * $C) / 2;
    echo "Area = " . number_format($area, 1) . "\n";
}
?>