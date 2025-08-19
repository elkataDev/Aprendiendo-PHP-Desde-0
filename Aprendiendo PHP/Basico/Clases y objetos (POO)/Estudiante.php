<?php

//Clase del ejercicio 10

class Estudiante {
    private $nombre;
    private $estudios;

    public function __construct($nombre, $estudios) {
        $this->nombre = $nombre;
        $this->estudios = $estudios;
    }

    public function mostrar() {
        echo "Soy {$this->nombre} y estudio {$this->estudios}<br>";
    }
}