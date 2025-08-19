<?php
//4. Validar si una cadena solo contiene letras

$cadena = readline("introduce texto: ");

if (ctype_alpha($cadena)) {
    echo "solo contiene letras";
} else {
    echo "NO contiene letras";
}