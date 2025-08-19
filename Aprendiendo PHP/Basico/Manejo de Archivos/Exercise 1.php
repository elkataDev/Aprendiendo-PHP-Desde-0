<?php
//1. Crea un archivo nuevo y escribe dentro de él.

// 1.1 nombre del archivo
$archivo = "Exercise 1.txt";

// 1.2 Abrir el archivo en modo escritura ('w' lo crea si no existe)
$handle = fopen($archivo, "w");

// 1.3 Contenido del archivo
$contenido = "Este es un archivo nuevo creado con PHP.\nContiene texto de ejemplo.";

// 1.4 Escribir el contenido en el archivo
fwrite($handle, $contenido);

// 1.5 Cerrar el archivo
fclose($handle);

echo "Archivo creado y contenido escrito con éxito.";


//PERMISOS

//"w" = crear/truncar y escribir.

//"a" = abrir para añadir al final (no trunca).

//"r" = abrir solo para lectura (no permite escribir).