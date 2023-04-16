<?php
$x = (int) readline();
$y = (int) readline();

if ($x > $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

for ($i = $x + 1; $i < $y; $i++) {
    if (($i % 5 == 2) || ($i % 5 == 3)) {
        echo $i . "\n";
    }
}
?>
