<?php

while (true) {
    // Lê a entrada
    $entrada = fgets(STDIN);
    
    // Verifica se é o fim dos casos de teste
    if ($entrada == "0 0\n") break;
    
    // Separa os valores de D e N
    list($d, $n) = explode(" ", trim($entrada));
    
    // Substitui o dígito falho por vazio
    $n = str_replace($d, "", $n);
    
    // Remove os zeros à esquerda
    $n = ltrim($n, "0");
    
    // Verifica se o número ficou vazio e coloca o valor 0
    if ($n == "") $n = "0";
    
    // Imprime o valor numérico do contrato
    echo $n . "\n";
}

?>