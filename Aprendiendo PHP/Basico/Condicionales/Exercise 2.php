<?php
//2. Usa if...elseif...else para categorizar edades: niño, adolescente, adulto.

//NOTA
//readline() coge todo lo que escribamos por consola (esto puede ocasionar problemas, es por eso que debemos validar los datos de entrada)
//ctype_digit() valida que el String solo contenga digitos numericos
//luego realizo un casteo (El casteo tambien se puede hacer con intval())

echo "Ingresa tu edad: ";
$edad = readline();

if (ctype_digit($edad)) {
    $edad = (int)$edad;

    if ($edad < 12) {
        echo "Es un niño";
    } elseif ($edad < 18) {
        echo "Es un adolescente";
    } else {
        echo "Es un adulto";
    }
} else {
    echo "El dato introducido por pantalla no es un numero";
}