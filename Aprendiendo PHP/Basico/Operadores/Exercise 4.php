<?php
//4. Aplica operadores bit a bit en dos enteros.

$a = 6;  // 110 en binario
$b = 3;  // 011 en binario

echo ($a & $b); // AND: 2
echo "\n";
echo ($a | $b); // OR: 7
echo "\n";
echo ($a ^ $b); // XOR: 5
echo "\n";
echo (~$a);    // NOT: -7