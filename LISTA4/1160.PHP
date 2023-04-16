<?php

$cases = intval(fgets(STDIN)); 

for ($i = 0; $i < $cases; $i++) {
    list($pa, $pb, $g1, $g2) = array_map("floatval", explode(" ", fgets(STDIN))); // lê os valores de PA, PB, G1 e G2 para o caso de teste atual

    $years = 0; 

    while ($pa <= $pb) {
        $pa += intval(($pa * $g1) / 100); 
        $pb += intval(($pb * $g2) / 100); 
        $years++; 
        if ($years > 100) {
            echo "Mais de 1 seculo.\n";
            break;
        }
    }

    if ($years <= 100) { 
        echo $years . " anos.\n";
    }
}

?>