<?php
list($N, $M) = explode(" ", readline());  
$K = intval(readline());

for ($i = 0; $i < $K; $i++) {
   list($X, $Y) = explode(" ", readline());
 if ($X == $N || $Y == $M) {
    echo "divisa\n";
  } else if ($X < $N && $Y < $M) {
    echo "SO\n";
  } else if ($X < $N && $Y > $M) {
    echo "NO\n";
  } else if ($X > $N && $Y < $M) {
    echo "SE\n";
  } else {
    echo "NE\n";
  }
}
?>  