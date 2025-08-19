<?php
//3. Crea un switch para identificar la estación del año.

echo "Ingresa la estacion del año: ";
$estacion = readline();

if (ctype_alpha($estacion)) { 

    switch ($estacion) {
        case 'verano':
            echo "Es verano";
            break;
        case 'invierno':
            echo "Es invierno";
            break;
        case 'otoño':
            echo "Es otoño";
            break;
        case 'primavera':
            echo "Es primavera";
            break;
        default:
            echo "No has mencionado ninguna estacion";
            break;
    }

} else {
    echo "Los datos introducidos por consola tienen que ser de tipo String";
}