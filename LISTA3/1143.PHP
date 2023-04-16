<?php


$n = intval(fgets(STDIN));

for ($i = 1; $i <= $n; $i++) {
    echo $i . " " . pow($i, 2) . " " . pow($i, 3) . "\n";
}
?>