<?php
    $s = 0;
    for ($i = 1; $i <= 100; $i++) {
        $s += 1 / $i;
    }
    echo number_format($s, 2) . "\n";
?>