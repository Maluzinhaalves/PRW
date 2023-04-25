<?php

$result=0;
$n1= $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['operacao'];

if($op=="soma"){$result=$n1+$n2;}
if($op=="subtracao"){$result=$n1-$n2;}
if($op=="multiplicacao"){$result=$n1*$n2;}
if($op=="divisao"){$result=$n1/$n2;}

echo "$result";

?>