<?php
//11. Pon un ejemplo de Traits

//Los traits son como “módulos de código” que puedes incluir en varias clases sin necesidad de herencia múltiple.
trait Logger {
    public function log($mensaje) {
        echo "[LOG] " . $mensaje . "<br>";
    }
}

// Otro trait
trait Notificador {
    public function notificar($mensaje) {
        echo "Notificación: " . $mensaje . "<br>";
    }
}

// Clase que usa un trait
class Usuario {
    use Logger, Notificador; // Se pueden usar varios traits

    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function mostrarUsuario() {
        echo "Usuario: {$this->nombre}<br>";
    }
}

// Ejemplo de uso
$usuario1 = new Usuario("Ana");
$usuario1->mostrarUsuario();
$usuario1->log("El usuario se ha registrado");
$usuario1->notificar("Tienes un nuevo mensaje");