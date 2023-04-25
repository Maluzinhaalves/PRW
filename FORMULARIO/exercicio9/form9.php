<?php
$nome = $_POST["nome"];
$horario = $_POST["horario"];

if (empty($nome) || empty($horario)) {
    echo "Por favor, preencha todos os campos.";
} else {
    $hora = (int)substr($horario, 0, 2);
    if ($hora < 12) {
        echo "Bom dia, $nome!";
    } elseif ($hora < 18) {
        echo "Boa tarde, $nome!";
    } else {
        echo "Boa noite, $nome!";
    }
}
?>
