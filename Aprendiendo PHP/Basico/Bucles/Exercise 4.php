<?php
//4. Muestra los números pares del 1 al 100.

for ($i=1; $i <= 100; $i++) { 
    if ($i % 2 == 0) {
        echo "Numero par: $i \n";
    }
}