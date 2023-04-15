<?php

while ($line = fgets(STDIN)) {
  $input = explode(" ", $line);
  $n = intval($input[0]);
  $l = intval($input[1]);
  $c = intval($input[2]);
  $text = fgets(STDIN);

  $words = explode(" ", trim($text));
  $line_count = 0;
  $page_count = 1;

  for ($i = 0; $i < $n; $i++) {
    $word_length = strlen($words[$i]);

    if ($line_count + $word_length + ($i < $n - 1 ? 1 : 0) <= $c) {
     
      $line_count += $word_length + ($i < $n - 1 ? 1 : 0);
    } else {
      
      $line_count = $word_length + ($i < $n - 1 ? 1 : 0);
      $line_count += ($line_count % $c == 0 ? 0 : 1);
     
      if ($line_count > $c) {
       
        $page_count++;
        $line_count = $word_length + ($i < $n - 1 ? 1 : 0);
      }
    }

    if ($i < $n - 1 && ($line_count + strlen($words[$i + 1]) + 1 > $c || $line_count + strlen($words[$i + 1]) + 1 + ($i < $n - 2 ? 1 : 0) > $c * $l)) {
      $page_count++;
      $line_count = 0;
    }
  }

  echo $page_count . "\n";
}

?>

