<?php
while (true) {
    $N = intval(fgets(STDIN));
    if ($N == 0) {
        break;
    }
    $M = array();
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $M[$i][$j] = min($i, $j, $N - $i - 1, $N - $j - 1) + 1;
        }
    }
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            echo sprintf("%3d", $M[$i][$j]);
            if ($j != $N - 1) {
                echo " ";
            }
        }
        echo "\n";
    }
    echo "\n";
}
?>