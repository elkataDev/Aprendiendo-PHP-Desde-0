<?php
//10. Validar si una cadena es un número positivo

$num = readline("Introduce un numero: ");

if (is_numeric($num) &&  $num >= 0) {
    echo "El numero es positivo";
} else {
    echo "No es un numero positivo";
}
