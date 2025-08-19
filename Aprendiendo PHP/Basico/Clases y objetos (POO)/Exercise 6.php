<?php
//6. Usa una interfaz para definir el contrato de una clase.
interface Mostrable {
    public function mostrarDatos();
}

// Clase que implementa la interfaz
class Persona implements Mostrable {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Implementación obligatoria del método de la interfaz
    public function mostrarDatos() {
        echo "Nombre: {$this->nombre}<br>";
        echo "Edad: {$this->edad}<br>";
    }
}
$persona = new Persona("Antonio", 24);
$persona->mostrarDatos();