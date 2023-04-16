<?php

while (($x = trim(fgets(STDIN))) != 0)
    echo implode(" ", range(1, $x)) . "\n";
?>