<?php
//5. Validar si una cadena representa un número decimal

$numero = readline("Número decimal: ");

if (filter_var($numero, FILTER_VALIDATE_FLOAT)) {
    echo "Número decimal válido.";
} else {
    echo "No es un número decimal válido.";
}