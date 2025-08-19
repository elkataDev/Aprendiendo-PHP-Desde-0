<?php
//10. Crea una clase con autoload usando `spl_autoload_register()`.

// Función de autoload
spl_autoload_register(function($clase) {
    $archivo = __DIR__ ."/". $clase . ".php"; // Asume que el archivo tiene el mismo nombre que la clase
    if (file_exists($archivo)) {
        include $archivo;
    } else {
        echo "No se encontró la clase $clase<br>";
    }
});

// Ahora podemos instanciar clases sin hacer include manual
$persona = new Persona("Juan");
$persona->saludar();
echo "\n";

$estudiante = new Estudiante("Antonio", "Superior DAW");
$estudiante->mostrar();
