<?php
    $n = (int) fgets(STDIN);
    for ($i = 0; $i < $n; $i++) {
        $line = trim(fgets(STDIN));
        $line = str_split($line);
        // Primeira passada
        for ($j = 0; $j < count($line); $j++) {
            if (ctype_alpha($line[$j])) {
                $line[$j] = chr(ord($line[$j]) + 3);
            }
        }
        // Segunda passada
        $line = array_reverse($line);
        // Terceira passada
        for ($j = (int) (count($line) / 2); $j < count($line); $j++) {
            $line[$j] = chr(ord($line[$j]) - 1);
        }
        echo implode("", $line) . "\n";
    }
?>