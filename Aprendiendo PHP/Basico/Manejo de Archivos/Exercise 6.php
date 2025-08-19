<?php
//6. Copia un archivo a otro lugar.

$origen = __DIR__ . "/Exercise 1.txt";
$destino = __DIR__ . "/Copia Exercise 1.txt";  // Nueva ruta y nombre del archivo copiado

// Comprobar que el archivo origen existe
if (!file_exists($origen)) {
    die("El archivo de origen no existe.");
}

//copiar el archivo
if (copy($origen, $destino)) {
    echo "Archivo copiado con éxito a: " . htmlspecialchars($destino);
} else {
    echo "Error al copiar el archivo.";
}