<?php
//9. Usa propiedades y métodos estáticos.
class Contador {
    // Propiedad estática
    public static $cuenta = 0;

    // Método estático para incrementar la cuenta
    public static function incrementar() {
        self::$cuenta++;
    }

    // Método estático para mostrar la cuenta
    public static function mostrarCuenta() {
        echo "Cuenta actual: " . self::$cuenta . "<br>";
    }
}

// Accedemos directamente sin crear un objeto
Contador::mostrarCuenta(); // 0
Contador::incrementar();
Contador::incrementar();
Contador::mostrarCuenta(); // 2

// También podemos crear objetos, la propiedad sigue siendo la misma
$obj1 = new Contador();
$obj1::incrementar();
Contador::mostrarCuenta(); // 3