<?php

$raio = (double) readline();
$pi = 3.14159;

$area = $pi * $raio * $raio;
$area = number_format($area,4,".","");
echo "A=$area\n";

?>