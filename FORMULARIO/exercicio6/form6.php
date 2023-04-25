<?php
 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $frequencia = $_POST["frequencia"];

    $media = ($nota1 + $nota2) / 2;

    if ($media >= 5 && $frequencia >= 75) {
      $mensagem = "Parabéns, $nome! Você foi aprovado com média $media e frequência $frequencia%.";
    } elseif ($media < 5) {
      $mensagem = "Infelizmente, $nome, você foi reprovado por nota com média $media.";
    } elseif ($frequencia < 75) {
      $mensagem = "Infelizmente, $nome, você foi reprovado por frequência com $frequencia% de presença.";
    }
  }
    if (isset($mensagem)) {
    if ($media < 5 || $frequencia < 75) {
          echo "<p style='color:red'>$mensagem</p>";
        } else {
          echo "<p>$mensagem</p>";
        }
      }
    ?>
  
