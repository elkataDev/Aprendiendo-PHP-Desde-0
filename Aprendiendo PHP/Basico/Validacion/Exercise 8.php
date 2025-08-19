<?php
//8. Validar contraseña: mínimo 8 caracteres, letras y números

$password = readline("Contraseña: ");

if (preg_match('/^[A-Za-z0-9]{8,}$/', $password)) {
    echo "Contraseña válida.";
} else {
    echo "Contraseña inválida (mínimo 8 caracteres, letras y números).";
}