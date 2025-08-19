<?php
//5. Divide una frase en palabras con `explode()`.

$cadena = "hola soy Antonio mas conocido como elkataDev";

$cadena = explode(" ",$cadena);

print_r($cadena);

//Asi funciona explode()
//explode(Delimitador,$cadena,Limite(opcionnal))