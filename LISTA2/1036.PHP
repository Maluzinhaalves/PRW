<?php
fscanf(STDIN, "%f %f %f", $A, $B, $C);

$delta = pow($B, 2) - 4 * $A * $C;

if ($A == 0 || $delta < 0) {
    echo "Impossivel calcular\n";
} else {
   
    $X = (-$B + sqrt($delta)) / (2 * $A);
    $X2 = (-$B - sqrt($delta)) / (2 * $A);

 
    printf("R1 = %.5f\n", $X);
    printf("R2 = %.5f\n", $X2);
}
?>