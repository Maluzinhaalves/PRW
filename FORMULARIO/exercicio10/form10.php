<?php
// Recebe a quantidade de camisetas pequenas, médias e grandes do formulário
$qtd_pequenas = $_POST['qtd_pequenas'];
$qtd_medias = $_POST['qtd_medias'];
$qtd_grandes = $_POST['qtd_grandes'];

// Calcula o valor total arrecadado
$valor_arrecadado = ($qtd_pequenas * 10) + ($qtd_medias * 12) + ($qtd_grandes * 15);

// Exibe o resultado na tela
echo "O valor arrecadado foi de R$ " . number_format($valor_arrecadado, 2, ',', '.');
?>