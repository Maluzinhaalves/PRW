<?php

function verificaPerfeito($num) {
    $somaDivisores = 0;
    
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $somaDivisores += $i;
        }
    }
    
    if ($somaDivisores == $num) {
        echo $num . " eh perfeito\n";
    } else {
        echo $num . " nao eh perfeito\n";
    }
}

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $num = intval(fgets(STDIN));
    verificaPerfeito($num);
}

?>