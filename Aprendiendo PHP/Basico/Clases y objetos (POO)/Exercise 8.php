<?php
//8. Implementa un método `__toString()`.
class Persona
{

    //Propiedades
    public $nombre;
    public $edad;

    // Constructor para inicializar
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function __toString()
    {
       return "Nombre: {$this->nombre}<br>Edad: {$this->edad}<br>";
    }
}

$persona1 = new Persona("Antonio", 24);
echo $persona1;
