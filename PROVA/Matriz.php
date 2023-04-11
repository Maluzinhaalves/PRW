<?php
$n=readline();
$n = number_format($n, 2, ".", "");

for($i=0; $i<5; $i++){
    for($cont=0; $cont<5; $cont++){
        $k=readline();
        $k = number_format($k, 2, ".", "");
        if ($k>=$n){
            echo "Valor Econtrado: $k";
            echo "Linha: $i";
            echo "coluna: $cont\n";
        }
    }
}

?>