<?php
//4. Hereda una clase `Estudiante` desde `Persona`.

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

class Estudiante extends Persona{
    private $estudios;

    public function __construct($nombre,$edad,$estudios){
        parent::__construct($nombre,$edad);
        $this->estudios= $estudios;
    }
    public function mostrarDatos() {
        // Podemos reutilizar el método del padre (Polimorfismo)
        parent::mostrarDatos();
        echo "Estudios: {$this->estudios}<br>";
    }
}

$estudiante1 = new Estudiante("Antonio",24,"Desarollo de aplicaciones web");
$estudiante1->mostrarDatos();