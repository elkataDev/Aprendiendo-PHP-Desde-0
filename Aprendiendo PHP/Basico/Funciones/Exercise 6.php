<?php
//6. Funciones de clase (métodos)

class Persona {
    function saludar() {
        return "Hola desde la clase";
    }
}

$antonio = new Persona();
echo $antonio->saludar();