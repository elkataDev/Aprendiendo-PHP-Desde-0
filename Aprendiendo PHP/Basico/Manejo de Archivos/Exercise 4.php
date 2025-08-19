<?php
//4. Lee un archivo línea por línea con `fgets()`.

$archivo =  __DIR__ . "/Exercise 1.txt"; //Ruta absoluta

// Abrir el archivo en modo lectura
$handle = fopen($archivo, "r");

if ($handle === false) {
    die("No se pudo abrir el archivo para lectura.");
}

// Leer línea por línea hasta el final
while (($linea = fgets($handle)) !== false) {
    echo htmlspecialchars($linea) . "<br>"; // htmlspecialchars para evitar problemas con HTML
}

// Cerrar el archivo
fclose($handle);

//htmlspecialchars(): protege caracteres especiales (<, >, &) para que se vean en HTML en lugar de interpretarse como etiquetas.
//fgets() lee hasta encontrar un salto de línea o el final del archivo.