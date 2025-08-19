<?php
//6. Validar si una IP es válida

define("IP",readline("Introduce una IP: ")); //Constante

if (filter_var(IP,FILTER_VALIDATE_IP)) {
    echo "IP Valida";
} else {
    echo "IP NO Valida";
}