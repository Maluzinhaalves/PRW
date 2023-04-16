<?php

while (($input = fgets(STDIN)) !== false) {
    $num = floatval($input);
    $cutoff = floatval(fgets(STDIN));

    $frac = $num - floor($num);
    if ($frac > $cutoff) {
        echo ceil($num) . "\n";
    } else {
        echo floor($num) . "\n";
    }
}
?>