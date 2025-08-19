<?php
//6. Valida una contraseña ingresada comparándola con una fija.

echo "Ingresa una contraseña: ";
$ingresada = readline();
$clave = "secreto";


if (ctype_alnum($ingresada)) {
    if ($clave === $ingresada) {
        echo "Acceso concedido";
    } else {
        echo "Acceso denegado";
    }
} else {
    echo "Datos incorrectos";
}
