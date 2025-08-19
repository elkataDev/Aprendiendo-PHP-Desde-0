<?php
//6. Combina dos arrays con `array_merge()`.

$numeros1 = [1, 2, 3];
$numeros2 = [4, 5, 6];

$resultado = array_merge($numeros1, $numeros2);

print_r($resultado);


//Con Array Asociativo

$persona1 = [
    "nombre" => "Juan",
    "edad" => 30
];

$persona2 = [
    "ciudad" => "Madrid",
    "edad" => 35 // Esta clave sobrescribirá la anterior
];

$resultado = array_merge($persona1, $persona2);

print_r($resultado);