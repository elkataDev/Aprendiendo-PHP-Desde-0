<?php
//9. Compara dos cadenas con `strcmp()`.

$cadena = "hola soy Antonio mas conocido como elkataDev";
$cadena2 = "hola soy Juan mas conocido como JuanDev";

$comparacion = strcmp($cadena,$cadena2);

echo $comparacion;

//Asi funciona strcmp()

//Devuelve 0 si ambas cadenas son idénticas.
//Devuelve un número negativo si $cadena1 < $cadena2.
//Devuelve un número positivo si $cadena1 > $cadena2.