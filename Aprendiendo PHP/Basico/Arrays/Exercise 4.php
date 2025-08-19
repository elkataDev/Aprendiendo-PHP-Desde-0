<?php
//4. Ordena un array numérico y uno alfabético.

//Numerico
$numeros = [5, 2, 9, 1, 7];

// Orden ascendente
sort($numeros);
echo "Ascendente:\n";
print_r($numeros);

// Orden descendente
rsort($numeros);
echo "Descendente:\n";
print_r($numeros);


//Alfabetico

$letras = ["naranja", "manzana", "pera", "banana"];

// Orden ascendente (A-Z)
sort($letras);
echo "Ascendente:\n";
print_r($letras);

// Orden descendente (Z-A)
rsort($letras);
echo "Descendente:\n";
print_r($letras);