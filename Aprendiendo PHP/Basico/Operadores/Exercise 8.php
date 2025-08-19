<?php
//8. Comprueba si dos variables son idénticas (tipo y valor).

$a = 10; //Int
$b = "10"; //String

//El operador === compara tipo y el valor
//En este caso tienen el mismo valor pero no son el mismo tipo de variable

if ($a === $b) {
    echo "Son idénticas";
} else {
    echo "No son idénticas";
}