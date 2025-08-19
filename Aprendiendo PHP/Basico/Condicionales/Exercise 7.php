<?php
//7. Determina si un año es bisiesto.

echo "Introduce un año para saber si es bisiesto: ";
$anio = readline();
if (ctype_digit($anio)) {
 if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
    echo "Es bisiesto";
} else {
    echo "No es bisiesto";
}   
} else {
 echo "Los datos introducidos no son digitos";
}