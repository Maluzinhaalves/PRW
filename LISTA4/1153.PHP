<?php
$n = intval(fgets(STDIN));
$fatorial = 1;
for ($i = $n; $i > 0; $i--) {
    $fatorial *= $i;
}
echo $fatorial . "\n";
?>
