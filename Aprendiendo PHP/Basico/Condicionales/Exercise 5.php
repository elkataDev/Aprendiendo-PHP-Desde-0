<?php
//5. Usa condicionales anidados para verificar requisitos de ingreso universitario.
$edad = 18;
$nota = 14;

if ($edad >= 18) {
    if ($nota >= 12) {
        echo "Ingreso aprobado";
    } else {
        echo "Nota insuficiente";
    }
} else {
    echo "Edad insuficiente";
}
