<?php
//7. Usa `instanceof` para verificar el tipo de objeto.

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

if ($persona1 instanceof Persona) {
    echo "es una instacia";
} else {
    echo "No es una instacia de persona";
}
