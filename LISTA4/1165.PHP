<?php

function ehPrimo($num){
    if($num == 2 || $num == 3) return true;
    if($num == 1 || $num % 2 == 0) return false;
    for($i = 3; $i <= sqrt($num); $i += 2){
        if($num % $i == 0) return false;
    }
    return true;
}

$n = intval(fgets(STDIN));

for($i = 0; $i < $n; $i++){

    $num = intval(fgets(STDIN));
    
    if(ehPrimo($num)){
        echo "$num eh primo\n";
    }else{
        echo "$num nao eh primo\n";
    }
}

?>