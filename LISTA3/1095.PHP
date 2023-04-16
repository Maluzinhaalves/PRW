<?php
$num1 = 1;
$num2 = 60;

for ($num1 = 1, $num2 = 60; $num2 <= 60; $num1 += 3, $num2 -= 5) {
    printf("I=%d J=%d\n", $num1, $num2);
    if ($num2 == 0)
        break;
}
?>