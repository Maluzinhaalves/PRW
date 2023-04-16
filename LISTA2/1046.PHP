<?php
fscanf(STDIN, "%d %d", $horaInicial, $horaFinal);

$duracao = $horaFinal - $horaInicial;

if ($duracao <= 0) {
    $duracao += 24;
}

echo "O JOGO DUROU $duracao HORA(S)\n";
?>