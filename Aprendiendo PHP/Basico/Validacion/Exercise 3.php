<?php
//3. Validar si un número está en el rango de edad (0 a 130)

$edad = readline("Edad: ");

if (filter_var($edad, FILTER_VALIDATE_INT, ["options" => ["min_range" => 0, "max_range" => 130]])) {
    echo "Edad válida.";
} elseif($edad == 0) {
    echo "Edad válida.";
}else {
    echo "Edad NO válida.";
}

//Nota: si introduces un 0, al estar en una condicion es false.