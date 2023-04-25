<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera o estado informado no formulário
        $estado = $_POST["estado"];

        // Define um array associativo com as capitais dos estados do Brasil
        $capitais = array(
          "Acre" => "Rio Branco",
          "Alagoas" => "Maceió",
          "Amapá" => "Macapá",
          "Amazonas" => "Manaus",
          "Bahia" => "Salvador",
          "Ceará" => "Fortaleza",
          "Distrito Federal" => "Brasília",
          "Espírito Santo" => "Vitória",
          "Goiás" => "Goiânia",
          "Maranhão" => "São Luís",
          "Mato Grosso" => "Cuiabá",
          "Mato Grosso do Sul" => "Campo Grande",
          "Minas Gerais" => "Belo Horizonte",
          "Pará" => "Belém",
          "Paraíba" => "João Pessoa",
          "Paraná" => "Curitiba",
          "Pernambuco" => "Recife",
          "Piauí" => "Teresina",
          "Rio de Janeiro" => "Rio de Janeiro",
          "Rio Grande do Norte" => "Natal",
          "Rio Grande do Sul" => "Porto Alegre",
          "Rondônia" => "Porto Velho",
          "Roraima" => "Boa Vista",
          "Santa Catarina" => "Florianópolis",
          "São Paulo" => "São Paulo",
          "Sergipe" => "Aracaju",
          "Tocantins" => "Palmas"
        );

        // Verifica se o estado informado existe no array de capitais
        if (array_key_exists($estado, $capitais)) {
          // Se existir, exibe a capital correspondente
          echo "<p>A capital de $estado é " . $capitais[$estado] . ".</p>";
        } else {
          // Se não existir, exibe uma mensagem de erro
          echo "<p>Desculpe, o estado informado não foi encontrado.</p>";
        }
      }
    ?>
  </body>
</html>
