<?php
    $n = (int) fgets(STDIN);
    $count = 1;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $count . " ";
            $count++;
        }
        echo "PUM\n";
        $count++;
    }
?>