<?php
//2. Convierte un string en mayúsculas y minúsculas.
$cadena = readline("Introduce una palabra o frase: ");

if (is_string($cadena)) {
    define("MAYUSCULAS",strtoupper($cadena));
    echo MAYUSCULAS;
}else {
    echo "datos incorrectos (No se aceptan numeros)";
}