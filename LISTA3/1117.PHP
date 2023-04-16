<?php
$nota1 = -1; 
while ($nota1 < 0 || $nota1 > 10) {
    $nota1 = (float) readline("Digite a primeira nota: ");
    if ($nota1 < 0 || $nota1 > 10) {
        echo "nota invalida\n";
    }
}

$nota2 = -1; 
while ($nota2 < 0 || $nota2 > 10) {
    $nota2 = (float) readline("Digite a segunda nota: ");
    if ($nota2 < 0 || $nota2 > 10) {
        echo "nota invalida\n";
    }
}

$media = ($nota1 + $nota2) / 2;
echo "media = " . number_format($media, 2) . "\n";
?>