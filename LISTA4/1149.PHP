<?php

    $l1 = explode(" ",readline());
    $t = 0;
    
    $n =($l1[count($l1) - 1]);
    $a =($l1[0]);
    
    if($n <= 0)
        {
            $n = readline();
        }
    
  
    for($i = 0; $i < $n; $i++)
    {
        $t += $a + $i;
    }
    
    echo "$t\n";
?>
