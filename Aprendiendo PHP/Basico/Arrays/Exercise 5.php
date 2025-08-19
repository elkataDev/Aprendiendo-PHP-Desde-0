<?php
//5. Usa foreach para imprimir todos los elementos de un array asociativo.
$usuario = [
    "usuario" => "juan123",
    "email" => "juan@example.com"
];
foreach ($usuario as $clave => $valor) {
    echo "$clave: $valor\n";
}