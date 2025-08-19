<?php
//7. Verifica si un string comienza con cierto texto.

$cadena = "hola soy Antonio mas conocido como elkataDev";

if (str_starts_with($cadena, "hola")) {
    echo "La cadena comienza con 'hola'.";
} else {
    echo "La cadena NO comienza con 'hola'.";
}