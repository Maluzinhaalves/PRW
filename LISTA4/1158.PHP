<?php

$n = intval(fgets(STDIN));


for ($i = 1; $i <= $n; $i++) {
    
    list($x, $y) = array_map('intval', explode(' ', fgets(STDIN)));

  
    if ($x % 2 == 0) {
        $x++;
    }

   
    $soma = 0;

    for ($j = 0; $j < $y; $j++) {
        $soma += $x;
        $x += 2;
    }

    echo $soma . PHP_EOL;
}
?>