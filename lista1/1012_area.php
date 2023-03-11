<?php
// Lê os valores de entrada
list($a, $b, $c) = fscanf(STDIN, "%f %f %f");

// Calcula as áreas
$triangulo = ($a * $c) / 2.0;
$circulo = 3.14159 * $c * $c;
$trapezio = ($a + $b) * $c / 2.0;
$quadrado = $b * $b;
$retangulo = $a * $b;

// Imprime as áreas
echo "TRIANGULO: " . number_format($triangulo, 3, '.', '') . "\n";
echo "CIRCULO: " . number_format($circulo, 3, '.', '') . "\n";
echo "TRAPEZIO: " . number_format($trapezio, 3, '.', '') . "\n";
echo "QUADRADO: " . number_format($quadrado, 3, '.', '') . "\n";
echo "RETANGULO: " . number_format($retangulo, 3, '.', '') . "\n";
?>

