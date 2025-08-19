<?php
//1. Evalúa si un número es par o impar.

echo "Ingresa un numero: ";
$numero = readline();
$numero = filter_var($numero, FILTER_VALIDATE_INT);

if (is_int($numero)) {
    if ($numero % 2 === 0) {
        echo "El numero es par ...";
    } else {
        echo "El numero es impar...";
    }
} else {
    echo "No es un numero";
}
