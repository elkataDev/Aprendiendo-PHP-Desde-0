<?php
//3.Funciones flecha

$num = readline("Introduce un numero: ");
$num = filter_var($num,FILTER_VALIDATE_INT);

if (!empty($num)) {
    $cuadrado = fn($n) => $n * $n; //Funcion Flecha
    echo "El cuadrado de $num es: " . $cuadrado($num);
} else {
    echo "Datos incorrectos";
}