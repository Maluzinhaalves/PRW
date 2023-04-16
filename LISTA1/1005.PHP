<?php

$nota1 = floatval(fgets(STDIN));
$nota2 = floatval(fgets(STDIN));

$media = (($nota1 * 3.5) + ($nota2 * 7.5)) / 11;

echo "MEDIA = " . number_format($media, 5, ".", "") . "\n";

?>