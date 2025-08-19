<?php
//1. Crea una clase `Persona` con propiedades y un método para mostrar datos.

class Persona{

    //Propiedades
    public $nombre;
    public $edad;

    // Constructor para inicializar
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    //método para mostrar datos
    public function mostrarDatos(){
        echo "Nombre: {$this->nombre}<br>";
        echo "Edad: {$this->edad}<br>";
    }
}

$persona1 = new Persona("Antonio",24);
$persona1->mostrarDatos();