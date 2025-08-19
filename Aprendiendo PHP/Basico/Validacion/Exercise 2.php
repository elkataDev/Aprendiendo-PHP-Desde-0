<?php
//2. Validar si una cadena es un correo electrónico válido

$email = readline("Ingresa tu email: ");

if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo "El email es valido";
} else {
    echo "Email INVALIDO";
}
