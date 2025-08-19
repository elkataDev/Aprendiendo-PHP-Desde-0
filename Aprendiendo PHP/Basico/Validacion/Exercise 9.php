<?php
//9. Validar si una cadena tiene solo letras y espacios

$texto = readline("Texto: ");

if (preg_match('/^[a-zA-Z\s]+$/', $texto)) {
    echo "Texto válido.";
} else {
    echo "Texto inválido (solo letras y espacios).";
}