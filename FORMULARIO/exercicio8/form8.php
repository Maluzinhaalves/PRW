<?php
if(isset($_POST['numero'])) {
    $numero = (int)$_POST['numero'];
    echo "<h1>Tabuada do $numero</h1>";
    echo "<table>";
    for($i=1; $i<=10; $i++) {
        echo "<tr>";
        echo "<td>$numero x $i</td>";
        echo "<td>=</td>";
        echo "<td>" . $numero*$i . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
