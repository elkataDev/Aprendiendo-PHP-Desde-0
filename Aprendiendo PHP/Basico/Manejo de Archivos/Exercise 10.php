<?php
//10. Lee un archivo CSV y muestra su contenido en tabla.

$archivo = __DIR__ . "/datos.csv";

if (!file_exists($archivo)) {
    die("El archivo CSV no existe.");
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";

// Abrir el archivo en modo lectura
if (($handle = fopen($archivo, "r")) !== false) {

    $primeraFila = true;

    while (($datos = fgetcsv($handle, 1000, ",")) !== false) {
        echo "<tr>";

        // Si es la primera fila, la mostramos como encabezado
        if ($primeraFila) {
            foreach ($datos as $encabezado) {
                echo "<th>" . htmlspecialchars($encabezado) . "</th>";
            }
            $primeraFila = false;
        } else {
            // Las demás filas son datos normales
            foreach ($datos as $celda) {
                echo "<td>" . htmlspecialchars($celda) . "</td>";
            }
        }

        echo "</tr>";
    }

    fclose($handle);

} else {
    echo "<tr><td colspan='100%'>No se pudo abrir el archivo.</td></tr>";
}

echo "</table>";