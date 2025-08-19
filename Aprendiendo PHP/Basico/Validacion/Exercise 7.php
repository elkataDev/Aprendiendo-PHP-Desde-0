<?php
//7. Validar si una URL es válida

$url = readline("URL: ");

if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "URL válida.";
} else {
    echo "URL inválida.";
}