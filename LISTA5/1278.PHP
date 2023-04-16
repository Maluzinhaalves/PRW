<?php

$first = true;
while (true) {
    $n = intval(fgets(STDIN));
    if ($n == 0) break;
    if (!$first) echo "\n";
    $first = false;
    $lines = [];
    $maxlen = 0;
    for ($i = 0; $i < $n; $i++) {
        $line = trim(fgets(STDIN));
        $line = preg_replace('/\s+/', ' ', $line);
        $len = strlen($line);
        if ($len > $maxlen) $maxlen = $len;
        array_push($lines, $line);
    }
    foreach ($lines as $line) {
        echo str_pad($line, $maxlen, ' ', STR_PAD_LEFT) . "\n";
    }
}
?>