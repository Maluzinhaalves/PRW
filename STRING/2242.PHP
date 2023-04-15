<?php

function risadaEngracada($risada) {
    $vogais = array('a', 'e', 'i', 'o', 'u'); 
    $vogaisRisada = array_intersect(str_split($risada), $vogais); 
    $vogaisJuntas = implode("", $vogaisRisada); 
    $vogaisJuntasInvertidas = strrev($vogaisJuntas); 
    return $vogaisJuntas == $vogaisJuntasInvertidas; 
}

$risada = trim(fgets(STDIN));

if (risadaEngracada($risada)) {
    echo "S\n";
} else {
    echo "N\n";
}

?>