<?php

$maiorValor = -INF;
$posicaoMaior = 0;

for ($i = 1; $i <= 100; $i++) {
  $valor = (int) fgets(STDIN);
  if ($valor > $maiorValor) {
    $maiorValor = $valor;
    $posicaoMaior = $i;
  }
}

echo $maiorValor . PHP_EOL;
echo $posicaoMaior . PHP_EOL;

?>
