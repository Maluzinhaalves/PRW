<?php

$count = 0;


for ($i = 0; $i < 6; $i++) {
    fscanf(STDIN, "%d", $num);
    
 
    if ($num > 0) {
  
        $count++;
    }
}


echo "$count valores positivos\n";
?>