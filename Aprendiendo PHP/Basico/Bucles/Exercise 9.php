<?php
//9. Rompe un bucle cuando se encuentre un número mayor que 50.
for ($i = 1; $i <= 100; $i++) {
    if ($i > 50) {
        break;
    }
    echo $i . " ";
}