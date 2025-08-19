<?php
//5. Crea una clase abstracta y una clase que la extienda.

abstract class Persona {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método abstracto (debe implementarse en las clases hijas)
    abstract public function mostrarDatos();

    // Método normal (opcional de usar en la clase hija)
    public function saludar() {
        echo "Hola, soy {$this->nombre}.<br>";
    }
}

// Clase que extiende la clase abstracta
class Estudiante extends Persona {
    private $estudios;

    public function __construct($nombre, $edad, $estudios) {
        parent::__construct($nombre, $edad);
        $this->estudios = $estudios;
    }

    // Implementación del método abstracto (Obligatorio)
    public function mostrarDatos() {
        echo "Nombre: {$this->nombre}<br>";
        echo "Edad: {$this->edad}<br>";
        echo "Estudios: {$this->estudios}<br>";
    }
}

$estudiante1 = new Estudiante("Antonio",24,"Desarollo de aplicaciones web");
$estudiante1 -> mostrarDatos();
echo "\n";
$estudiante1->saludar();