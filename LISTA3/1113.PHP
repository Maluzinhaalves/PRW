<?php

while (true) {

  list($x, $y) = fscanf(STDIN, "%d %d");

  if ($x == $y) {
    break;
  }

  if ($x < $y) {
    echo "Crescente\n";
  } else {
    echo "Decrescente\n";
  }
}