<?php
//3. Agrega una línea a un archivo sin borrar el contenido anterior.

$archivo =  __DIR__ . "/Exercise 1.txt"; //Ruta absoluta

$handle = fopen($archivo, "a");

$contenido = "\nMi nombre es ElKataDev" . PHP_EOL; // Añadir salto de línea

fwrite($handle,$contenido);

fclose($handle);

// Leer y mostrar el contenido completo del archivo
echo nl2br(file_get_contents($archivo));