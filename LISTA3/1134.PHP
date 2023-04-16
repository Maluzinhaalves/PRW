<?php

$alcool = $gasolina = $diesel = 0;

while (true) {
    $tipo = (int) readline();
    
    if ($tipo == 1) {
        $alcool++;
    } elseif ($tipo == 2) {
        $gasolina++;
    } elseif ($tipo == 3) {
        $diesel++;
    } elseif ($tipo == 4) {
        break;
    }

    if ($tipo < 1 || $tipo > 4) {
        continue;
    }
}

echo "MUITO OBRIGADO\n";
echo "Alcool: $alcool\n";
echo "Gasolina: $gasolina\n";
echo "Diesel: $diesel\n";
?>