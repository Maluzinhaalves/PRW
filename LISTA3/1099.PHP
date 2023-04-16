<?php

$n = intval(fgets(STDIN));
while ($n--) {
    list($x, $y) = array_map('intval', explode(" ", fgets(STDIN)));
    if ($x > $y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    $sum = 0;
    for ($i = $x + 1; $i < $y; $i++) {
        if ($i % 2 == 1) {
            $sum += $i;
        }
    }
    echo $sum . "\n";
}

?>