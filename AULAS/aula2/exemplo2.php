<?php
//exemplo para perrcorrer os elemntos de um vetor
$alunos = array("Malu", "Ale", "Gabgab","Leo");
print_r($alunos); //imprime todos os elementos do vetor
echo "<br>";
echo "Quantidade de elementos :".count($alunos). "<br>";
echo "<hr>";
sort($alunos);
for($x = 0; $x < count($alunos); $x++)
{

    echo "Aluno na posição $x: ".$alunos[$x]. "<br>";
    echo "quantidade de caracteres: ".strlen($alunos[$x]). "<br>";
    echo "<hr>";

}
$indice = array_search("Gabgab",$alunos);
if($indice === false)
echo "Elemento não encontrado!<br>";
else
echo "Elemento encontrado na posição $indice!<br>"
?>