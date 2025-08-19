<?php
//8. Comprueba si un string contiene una determinada palabra.

$texto = "Hola mundo";
$buscar = "mundo";
if (strpos($texto, $buscar) !== false) {
    echo "Palabra encontrada";
} else {
    echo "Palabra no encontrada";
}