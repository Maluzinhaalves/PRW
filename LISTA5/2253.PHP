<?php

while ($senha = rtrim(fgets(STDIN))) { // leitura de várias senhas, terminando com EOF

    // Verifica o comprimento da senha
    if (strlen($senha) < 6 || strlen($senha) > 32) {
        echo "Senha invalida.\n";
        continue; // passa para a próxima senha
    }

    // Verifica se a senha contém apenas letras, números e sem espaços
    if (!ctype_alnum($senha)) {
        echo "Senha invalida.\n";
        continue; // passa para a próxima senha
    }

    // Verifica se a senha contém pelo menos uma letra maiúscula, uma letra minúscula e um número
    if (!preg_match('/[A-Z]/', $senha) || !preg_match('/[a-z]/', $senha) || !preg_match('/[0-9]/', $senha)) {
        echo "Senha invalida.\n";
        continue; // passa para a próxima senha
    }

    // Se todas as verificações passarem, a senha é válida
    echo "Senha valida.\n";
}

?>