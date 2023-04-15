<?php

for ($i = 0; $i < 20; $i++) {
    fscanf(STDIN, "%d", $N[$i]);
}

for ($i = 0, $j = 19; $i < 10; $i++, $j--) {
    $temp = $N[$i];
    $N[$i] = $N[$j];
    $N[$j] = $temp;
}

for ($i = 0; $i < 20; $i++) {
    echo "N[$i] = " . $N[$i] . "\n";
}
?>