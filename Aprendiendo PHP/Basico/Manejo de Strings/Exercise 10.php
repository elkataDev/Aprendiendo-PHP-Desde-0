<?php
//10. Formatea un texto con variables usando `sprintf()`.

$nombre = "Antonio";
$nickname = "elkataDev";

// Usamos sprintf para construir la cadena
$cadena = sprintf("hola soy %s mas conocido como %s", $nombre, $nickname);

echo $cadena;