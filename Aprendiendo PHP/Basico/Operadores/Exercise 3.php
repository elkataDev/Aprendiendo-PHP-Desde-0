<?php
//3. Usa operadores lógicos para verificar si una persona puede entrar a un club (edad y vestimenta).

$edad = 21;
$vestimenta = "formal";

if ($edad >= 18 && $vestimenta == "formal") {
    echo "Entrada permitida";
} else {
    echo "Entrada denegada";
}