<?php
//5. Verifica si un archivo existe con `file_exists()`.

$archivo = __DIR__ . "/Exercise 1.txt"; //Ruta absoluta

if (file_exists($archivo)) {
    echo "Existe";
}else {
    echo "No existe";
}