<?php
fscanf(STDIN, "%d", $X);

if ($X == 61) {
    echo "Brasilia\n";
} elseif ($X == 71) {
    echo "Salvador\n";
} elseif ($X == 11) {
    echo "Sao Paulo\n";
} elseif ($X == 21) {
    echo "Rio de Janeiro\n";
} elseif ($X == 32) {
    echo "Juiz de Fora\n";
} elseif ($X == 19) {
    echo "Campinas\n";
} elseif ($X == 27) {
    echo "Vitoria\n";
} elseif ($X == 31) {
    echo "Belo Horizonte\n";
} else {
    echo "DDD nao cadastrado\n";
}
?>