<?php
if (isset($_POST['numero'])) {
  $numero = intval($_POST['numero']);

  echo "<h1>Tabuada do $numero:</h1>";
  echo "<ul>";
  for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<li>$numero x $i = $resultado</li>";
  }
  echo "</ul>";
}
?>
