<?php
//3. Añade y elimina elementos de un array dinámicamente.

$frutas = ["Manzana","Banana"];

array_push($frutas, "Pera");       // Añadir con array_push

unset($frutas[1]);                 // Eliminar "Banana"
$frutas = array_values($frutas);   // Reindexar

array_pop($frutas);                // Eliminar último ("Pera")
array_shift($frutas);              // Eliminar primero ("Manzana")

print_r($frutas);                  // Mostrar array resultante