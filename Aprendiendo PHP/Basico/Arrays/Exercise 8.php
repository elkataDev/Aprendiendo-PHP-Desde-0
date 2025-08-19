<?php
//8. Convierte un array en string con implode() y viceversa con explode().


$array = ["PHP", "JavaScript", "Java"];   // Une los elementos con una coma y espacio
$str = implode(", ", $array);
echo $str;

$arr2 = explode(", ", $str);    // Divide el string por ", "
print_r($arr2);