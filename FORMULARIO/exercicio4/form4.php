<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ano = $_POST["ano"];

   
    if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {

      $mensagem = "O ano $ano é bissexto.";
    } else {

      $mensagem = "O ano $ano não é bissexto.";
    }
  }
  if (isset($mensagem)) {
    echo "<p>$mensagem</p>";
  }
?>


    
