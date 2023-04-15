<?php
// Lê o valor X
$x = floatval(fgets(STDIN));

// Inicializa o vetor com o valor de X na primeira posição
$N = [$x];

// Preenche as demais posições do vetor com metade do valor da posição anterior
for ($i = 1; $i < 100; $i++) {
    $N[$i] = $N[$i-1] / 2;
}

// Imprime o vetor N com 4 casas decimais em cada posição
for ($i = 0; $i < 100; $i++) {
    printf("N[%d] = %.4f\n", $i, $N[$i]);
}
?>