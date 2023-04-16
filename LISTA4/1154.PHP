<?php

$sum = 0;
$count = 0;

while (true) {
  $age = intval(fgets(STDIN));
  
  if ($age < 0) {
    break;
  }
  
  $sum += $age;
  $count++;
}

$average = $sum / $count;

printf("%.2f\n", $average);

?>