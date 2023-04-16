<?php
    while (true) {
        fscanf(STDIN, "%d %d", $m, $n);
        if ($m <= 0 || $n <= 0) {
            break;
        }
        $sum = 0;
        if ($m > $n) {
            list($m, $n) = array($n, $m);
        }
        for ($i = $m; $i <= $n; $i++) {
            echo $i . " ";
            $sum += $i;
        }
        echo "Sum=" . $sum . "\n";
    }
?>