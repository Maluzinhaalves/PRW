<?php
$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $inputs = explode(" ", fgets(STDIN));
    $A = trim($inputs[0]);
    $B = trim($inputs[1]);
    if (substr_compare($A, $B, -strlen($B)) === 0) {
        echo "encaixa\n";
    } else {
        echo "nao encaixa\n";
    }
}
?> 