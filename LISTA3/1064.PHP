<?php

$count = 0;
$sum = 0;

for ($i = 0; $i < 6; $i++) {
    fscanf(STDIN, "%f", $num);
    
    if ($num > 0) {
        
        $count++;
        $sum += $num;
    }
}


$average = $sum / $count;


echo "$count valores positivos\n";
echo number_format($average, 1, '.', '') . "\n";
?>