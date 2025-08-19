<?php
//7. Divide un array en fragmentos con `array_chunk()`.

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// Dividir en fragmentos de 3 elementos
$fragmentos = array_chunk($numeros, 3);

print_r($fragmentos);


//Array Asociativo

$datos = [
    "a" => "uno",
    "b" => "dos",
    "c" => "tres",
    "d" => "cuatro"
];

$fragmentos = array_chunk($datos, 2, true); //si es true, mantiene las claves originales, si es false (por defecto), las reindexa.

print_r($fragmentos);