<?php
$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $k = intval(fgets(STDIN));
    $languages = [];
    for ($j = 0; $j < $k; $j++) {
        $language = trim(fgets(STDIN));
        $languages[$language] = true;
    }
    if (count($languages) == 1) {
        echo key($languages) . "\n";
    } else {
        echo "ingles\n";
    }
}
?>