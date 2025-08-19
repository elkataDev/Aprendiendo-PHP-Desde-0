<?php
//4. Comprueba si un número es múltiplo de 3 y 5.

echo "Introduce un numero para comprobar si es multiplo de 3 y 5: ";
$numero = readline();
$numero = filter_var($numero, FILTER_VALIDATE_INT);
if (is_int($numero)) {
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        echo "El numero $numero SI es multiplo de 3 y 5"; 
    } else {
        echo "El numero $numero NO es multiplo de 3 y 5";
    }
} else {
    echo "Los datos introducidos por pantalla no son de tipo int";
}
