<?php

//clase del ejercicio 10

class Persona {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function saludar() {
        echo "Hola, soy {$this->nombre}<br>";
    }
}