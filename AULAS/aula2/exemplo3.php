<?php

//Exemplo para percorrer elementos de um vetor 
$alunos = array("Malu","Leo","Gab","Ale");
print_r($alunos);
echo "<br>";

unset($alunos[1]);
print_r($alunos);
echo "<br>";

$alunos = array_values($alunos);
print_r($alunos);
echo "<br>"

?>