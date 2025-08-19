<?php
//5. Funciones con tipado (PHP 7+)

function sumar(int $a, int $b): int {
    return $a + $b;
}

//echo sumar(2.4,4);//Error
echo sumar(2,4);