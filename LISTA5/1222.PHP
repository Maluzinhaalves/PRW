<?php
    while (true) {
$line = fgets(STDIN);
if ($line === false) {
break;
}
list($n, $l, $c) = explode(" ", trim($line));
$words = explode(" ", trim(fgets(STDIN)));
$lines = 1;
$chars = 0;
for ($i = 0; $i < $n; $i++) {
if ($chars + strlen($words[$i]) <= $c) {
$chars += strlen($words[$i]);
if ($i != $n - 1) {
$chars++;
}
} else {
$lines++;
$chars = strlen($words[$i]) + 1;
}
}
echo ceil($lines / $l) . "\n";
}
?>