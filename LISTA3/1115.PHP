<?php

while (true) {
  // leitura das coordenadas (X,Y)
  list($x, $y) = fscanf(STDIN, "%d %d");

  // verificação para encerrar a execução do programa
  if ($x == 0 || $y == 0) {
    break;
  }

  // determinação do quadrante
  if ($x > 0 && $y > 0) {
    echo "primeiro\n";
  } else if ($x < 0 && $y > 0) {
    echo "segundo\n";
  } else if ($x < 0 && $y < 0) {
    echo "terceiro\n";
  } else if ($x > 0 && $y < 0) {
    echo "quarto\n";
  }
}
?>