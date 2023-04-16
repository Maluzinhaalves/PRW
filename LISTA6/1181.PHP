<?php
$L = intval(fgets(STDIN));
$T = fgets(STDIN);
$sum = 0.0;
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $M[$i][$j] = floatval(fgets(STDIN));
        if ($i == $L) {
            $sum += $M[$i][$j];
        }
    }
}
if (trim($T) == 'S') {
    echo number_format($sum, 1, '.', '') . "\n";
} else {
    echo number_format($sum / 12.0, 1, '.', '') . "\n";
}
?>