<?php

$operacao = trim(fgets(STDIN));

for ($i = 0; $i < 12; $i++) {
  for ($j = 0; $j < 12; $j++) {
    $matriz[$i][$j] = (float) trim(fgets(STDIN));
  }
}

$soma = 0;
$contador = 0;
for ($i = 0; $i < 12; $i++) {
  for ($j = 0; $j < 12; $j++) {
    if ($j < 11 - $i) {
      $soma += $matriz[$i][$j];
      $contador++;
    }
  }
}

if ($operacao == "S") {

  printf("%.1f\n", $soma);
} elseif ($operacao == "M") {

  $media = $soma / $contador;
  printf("%.1f\n", $media);
}
?>