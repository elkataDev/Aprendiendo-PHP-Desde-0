<?php
//3. Usa métodos `get` y `set` para acceder a propiedades privadas.

class Persona{

    //Propiedades
    public $nombre;
    public $edad;

    // Constructor para inicializar
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        if (ctype_alpha($nombre)) {
         $this->nombre = $nombre;
        }        
    }

    public function getEdad(){ return $this->edad;}

    public function setEdad($edad){
        if (is_int($edad) && $edad >= 0) {
            $this->edad = $edad;
        }
    }

    //método para mostrar datos
    public function mostrarDatos(){
        echo "Nombre: {$this->nombre}<br>";
        echo "Edad: {$this->edad}<br>";
    }
}

$persona1 = new Persona("Antonio",24);
echo $persona1->getNombre() . "\n";
echo $persona1->getEdad() ."\n";


$persona1 -> setEdad(70);
$persona1 -> setEdad(-1);//no hace nada
$persona1 -> setNombre("Juan");

$persona1->mostrarDatos();