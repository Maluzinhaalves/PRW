<?php
    for ($i = 0; $i <= 2; $i += 0.2) {
        for ($j = 1; $j <= 3; $j++) {
            if ($i == 0 || $i == 1 || $i > 1.8) {
                echo "I=" . round($i) . " J=" . round($j + $i) . "\n";
            } else {
                echo "I=" . number_format($i, 1) . " J=" . number_format($j + $i, 1) . "\n";
            }
        }
    }
?>