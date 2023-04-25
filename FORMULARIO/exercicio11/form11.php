<?php
$prontuario = $_POST['prontuario'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$periodo = $_POST['periodo'];
$modulo = $_POST['modulo'];
$erros = [];

// Validação do prontuário
if (empty($prontuario)) {
    $erros[] = "O prontuário não pode estar em branco.";
}

// Validação do nome
if (empty($nome)) {
    $erros[] = "O nome não pode estar em branco.";
}

// Validação da idade
if ($idade < 15 || $idade > 75) {
    $erros[] = "A idade deve ser um valor entre 15 e 75 anos.";
}

// Validação do período
if ($periodo != 'V' && $periodo != 'N') {
    $erros[] = "O período deve ser 'V' para vespertino ou 'N' para noturno.";
}

// Validação do módulo
if ($modulo < 1 || $modulo > 4) {
    $erros[] = "O módulo deve ser um valor entre 1 e 4.";
}

// Se houver erros, exibe as mensagens
if (count($erros) > 0) {
    echo "<h1>Foram encontrados os seguintes erros:</h1>";
    echo "<ul>";
    foreach ($erros as $erro) {
        echo "<li>$erro</li>";
    }
    echo "</ul>";
} else {
    // Caso contrário, exibe os dados do formulário
    echo "<h1>Dados do formulário:</h1>";
    echo "<p><strong>Prontuário:</strong> $prontuario</p>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Idade:</strong> $idade</p>";
    echo "<p><strong>Período:</strong> $periodo</p>";
    echo "<p><strong>Módulo:</strong> $modulo</p>";
}
?>
