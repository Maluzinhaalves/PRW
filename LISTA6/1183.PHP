<?php

$operacao = trim(fgets(STDIN));

$matriz = array();
for ($i = 0; $i < 12; $i++) {
  $linha = array();
  for ($j = 0; $j < 12; $j++) {
    $linha[] = (float)trim(fgets(STDIN));
  }
  $matriz[] = $linha;
}

$soma = 0;
$cont = 0;
for ($i = 0; $i < 12; $i++) {
  for ($j = $i+1; $j < 12; $j++) {
    $soma += $matriz[$i][$j];
    $cont++;
  }
}
if ($operacao == 'M') {
  $media = $soma / $cont;
  printf("%.1f\n", $media);
} else {
  printf("%.1f\n", $soma);
}
?>