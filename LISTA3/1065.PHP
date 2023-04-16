<?php

$count = 0;

for ($i = 0; $i < 5; $i++) {
    fscanf(STDIN, "%d", $num);

    if ($num % 2 == 0) {
      
        $count++;
    }
}


echo "$count valores pares\n";
?>