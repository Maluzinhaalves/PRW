<?php

function trocarCaracteres($palavra) {
    $trocas = array(
        'P' => 'B',
        'F' => 'V',
        'T' => 'D',
        'R' => 'L',
        'J' => 'Z',
        'X' => 'S'
    );
    return strtr($palavra, $trocas);
}

function inverterFrase($frase) {
    $palavras = explode(" ", $frase);
    $palavrasInvertidas = array_reverse($palavras);
    return implode(" ", $palavrasInvertidas);
}

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $frase = trim(fgets(STDIN));

    $fraseInvertida = inverterFrase($frase);

    $palavras = explode(" ", $fraseInvertida);
    $palavrasCriptografadas = array();
    foreach ($palavras as $palavra) {
        $palavraCriptografada = trocarCaracteres($palavra);
        array_push($palavrasCriptografadas, $palavraCriptografada);
    }

    $fraseCriptografada = implode(" ", $palavrasCriptografadas);
    echo $fraseCriptografada . "\n";
}

?>