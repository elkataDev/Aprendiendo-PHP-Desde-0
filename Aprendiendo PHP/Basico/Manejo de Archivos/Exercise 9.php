<?php
//9. Cuenta cuántas líneas tiene un archivo.

$archivo = __DIR__ . "/Exercise 1.txt";

if (!file_exists($archivo)) {
    die("El archivo no existe.");
}

$lineas = file($archivo);
echo "El archivo tiene " . count($lineas) . " líneas.";