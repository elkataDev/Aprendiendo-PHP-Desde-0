<?php
//8. Lee el contenido completo de un archivo con `file_get_contents()`.

$archivo = __DIR__ . "/Exercise 1.txt";

if (file_exists($archivo)) {
  echo file_get_contents($archivo);
} else {
    echo "archivo no existe";
}