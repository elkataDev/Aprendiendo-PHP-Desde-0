<?php
//9. Crea una matriz (array multidimensional) y recórrela.

$array = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]];

for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "\n";
}