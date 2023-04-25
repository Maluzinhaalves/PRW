<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $comprimento = $_POST["comprimento"];
    $largura = $_POST["largura"];

    $area = $comprimento * $largura;
    $mensagem = "A área do terreno é $area metros quadrados.";
}
     if (isset($mensagem)) {
        echo "<p>$mensagem</p>";
      }
?>
  
