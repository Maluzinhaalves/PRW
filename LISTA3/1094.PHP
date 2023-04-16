<?php
$test_cases = intval(fgets(STDIN));

$total = 0;
$ratos = 0;
$sapos = 0;
$coelhos = 0;

for ($i = 0; $i < $test_cases; $i++) {
    $line = explode(' ', fgets(STDIN));
    $quantidade = intval($line[0]);
    $tipo = trim($line[1]);

    $total += $quantidade;
    if ($tipo == 'R') {
        $ratos += $quantidade;
    } elseif ($tipo == 'S') {
        $sapos += $quantidade;
    } elseif ($tipo == 'C') {
        $coelhos += $quantidade;
    }
}

$percentual_ratos = ($ratos / $total) * 100;
$percentual_sapos = ($sapos / $total) * 100;
$percentual_coelhos = ($coelhos / $total) * 100;

echo "Total: {$total} cobaias\n";
echo "Total de coelhos: {$coelhos}\n";
echo "Total de ratos: {$ratos}\n";
echo "Total de sapos: {$sapos}\n";
echo "Percentual de coelhos: " . number_format($percentual_coelhos, 2) . " %\n";
echo "Percentual de ratos: " . number_format($percentual_ratos, 2) . " %\n";
echo "Percentual de sapos: " . number_format($percentual_sapos, 2) . " %\n";

?>