<?php

$X[0] = readline();

for ($i = 1; $i < 10; $i++) {
    $X[$i] = 2 * $X[$i-1];
}

foreach ($X as $key => $value) {
    echo "N[$key] = $value\n";
}

?>