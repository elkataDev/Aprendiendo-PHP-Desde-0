<?php
//4. Reemplaza texto dentro de una cadena.

$cadena = "hola soy JUAN mas conocido como elkataDev";

$cadena = str_replace("JUAN","Antonio",$cadena);

echo $cadena;


//Asi funciona la funcion 
//str_replace($buscar, $reemplazar, $cadena);