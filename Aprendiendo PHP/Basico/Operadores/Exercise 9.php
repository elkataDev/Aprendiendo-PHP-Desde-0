<?php
//9. Usa el operador de fusión null (??) para definir un valor por defecto.

// ?? devuelve el primer valor que no sea null y esté definido.


$nombre = $_GET['nombre'] ?? 'Invitado';
echo "Hola, $nombre";