<?php

$n = intval(fgets(STDIN)); 

for ($i = 0; $i < $n; $i++) {
  $linha = trim(fgets(STDIN)); 
  $valores = array_map('intval', explode(' ', $linha));

  list($x, $y) = $valores;
  if ($y == 0) {
    echo "divisao impossivel\n";
  } else {
    $resultado = $x / $y; 
    echo number_format($resultado, 1, '.', '') . "\n"; 
  }
}
?>