<?php
list($x, $y) = array_map('intval', explode(' ', fgets(STDIN)));

for ($i = 1; $i <= $y; $i++) {
    echo $i;
    if ($i < $y && ($i % $x) != 0) {
        echo " ";
    }
    if (($i % $x) == 0 || $i == $y) {
        echo "\n";
    }
}
?>