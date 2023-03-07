<?php


$nota1 = floatval(fgets(STDIN));
$nota2 = floatval(fgets(STDIN));
$nota3 = floatval(fgets(STDIN));

$media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;


echo "MEDIA = " . number_format($media, 1, ".", "") . "\n";

?>