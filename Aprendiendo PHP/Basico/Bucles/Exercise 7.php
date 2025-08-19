<?php
//7. Imprime los caracteres de una cadena uno a uno usando foreach.
$cadena = readline("Introduce una palabra o un texto: ");

if (!empty($cadena)) {
    foreach (mb_str_split($cadena) as $caracter) {
        echo $caracter . "\n";
    }
} else {
    echo "Cadena vacía o inválida";
}