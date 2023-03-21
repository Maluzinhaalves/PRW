<?php 
$data = date('d/m/Y');
echo $data."<br>";
$d = explode('/',$data);

echo "Dia: ".$d[0]."<br>";
echo "Mes: ".$d[1]."<br>";
echo "Ano: ".$d[2]."<br>";

$str = "IFSP Campus Birigui";
$e = explode(' ',$str);
for($i=0; $i<count($e); $i++){
    echo $e[$i]."<br>";
}



?>
