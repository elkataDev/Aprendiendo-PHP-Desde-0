<?php
//2. Abre un archivo existente y lee su contenido.

// Nombre del archivo / ruta
$archivo = "Exercise 1.txt";

// Abrir el archivo en modo lectura
$handle = fopen($archivo, "r");

// Leer todo el contenido
$contenido = fread($handle, filesize($archivo));

// Cerrar el archivo
fclose($handle);

// Mostrar el contenido leído
echo $contenido;