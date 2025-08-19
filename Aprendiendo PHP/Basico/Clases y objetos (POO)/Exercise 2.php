<?php
//2. Usa el constructor `__construct()` para inicializar propiedades.

class Persona{

    //Propiedades
    public $nombre;
    public $edad;

    // Constructor por defecto
    public function __construct() {
        $this->nombre = "Antonio";
        $this->edad = 24;
    }
      //método para mostrar datos
    public function mostrarDatos(){
        echo "Nombre: {$this->nombre}<br>";
        echo "Edad: {$this->edad}<br>";
    }
}

$persona1 = new Persona();
$persona1->mostrarDatos();