<?php
//4. Intercambia los valores de dos variables usando una variable temporal.

$num1 = 5;
$num2 = 10;
$temp = $num1;
$num1 = $num2;
$num2 = $temp;
echo "numero 1 = $num1, numero 2 = $num2";
