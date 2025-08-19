<?php
//2. Calcula la suma de los primeros 100 números naturales.

$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}

echo "Resultado: $suma";
