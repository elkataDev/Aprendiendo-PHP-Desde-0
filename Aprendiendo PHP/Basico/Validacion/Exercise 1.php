<?php
//1. Validar si una entrada es un número entero

$input = readline("Ingresa un número entero: ");

if (filter_var($input, FILTER_VALIDATE_INT)) {
    echo "Es un entero válido.";
} else {
    echo "No es un número entero.";
}