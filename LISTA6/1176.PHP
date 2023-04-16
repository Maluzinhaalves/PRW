<?php

function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2]; 
    }
    return $fib[$n]; 
}

$t = intval(fgets(STDIN));

for ($i = 0; $i < $t; $i++) {
    $n = intval(fgets(STDIN));
    $fib_n = fibonacci($n);
    
    printf("Fib(%d) = %d\n", $n, $fib_n);
}
?>