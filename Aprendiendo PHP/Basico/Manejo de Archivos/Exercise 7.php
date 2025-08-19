<?php
//7. Elimina un archivo con `unlink()`.

$archivo = __DIR__ ."/Copia Exercise 1.txt";

if (!file_exists($archivo)) {
    die("El archivo de origen no existe.");
}

if (unlink($archivo)) {
  echo "Archivo eliminado correctamente";
}else {
    echo "Error";
}