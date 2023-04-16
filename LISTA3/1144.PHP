<?php
    $n = (int) fgets(STDIN);
    for ($i = 1; $i <= $n; $i++) {
        echo $i . " " . pow($i, 2) . " " . pow($i, 3) . "\n";
        echo $i . " " . (pow($i, 2) + 1) . " " . (pow($i, 3) + 1) . "\n";
    }
?>
