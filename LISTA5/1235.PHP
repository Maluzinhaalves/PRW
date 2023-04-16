<?php

$n = intval(readline());

while ($n--) {
    $f = readline();
    $hl = intval(strlen($f) / 2);

    for ($i = $hl - 1; $i >= 0; $i--) {
        echo $f[$i];
    }

    for ($i = strlen($f) - 1; $i >= $hl; $i--) {
        echo $f[$i];
    }

    echo "\n";
}

?>