<?php
//6. Une palabras con `implode()`.

$cadena = "hola soy Antonio mas conocido como elkataDev";

$array_palabras = explode(" ", $cadena); // divide en palabras

$cadena_unida = implode(", ", $array_palabras); // une con coma

print_r($cadena_unida);