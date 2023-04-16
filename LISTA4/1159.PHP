<?php

while (true) {
  $x = intval(fgets(STDIN));

  if ($x == 0) {
    break;
  }

  $sum = 0;
  $count = 0;

  while ($count < 5) {
    if ($x % 2 == 0) {
      $sum += $x;
      $count++;
    }
    $x++;
  }

  echo $sum . "\n";
}

?>