<?php
$n = intval(fgets(STDIN));
$prev = 0;
$current = 1;
echo $prev;
for ($i = 1; $i < $n; $i++) {
  echo " $current";
  $next = $prev + $current;
  $prev = $current;
  $current = $next;
}
echo "\n";

?>
