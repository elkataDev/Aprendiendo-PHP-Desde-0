<?php
//10. Salta la impresión de números múltiplos de 3 en un bucle.

for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0) {
        continue;
    }
    echo $i . " ";
}