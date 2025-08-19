<?php
//Hola Mundo
echo "Hola, PHP \n";


//Variables
$my_String = "Estoy aprendiendo a usar PHP";
echo $my_String ."\n";

//gettype nos dice el tipo de dato de la variable (String, int ...)

//String
echo gettype ($my_String) . "\n";
$my_String = 6; //int
echo gettype ($my_String) ."\n";
echo $my_String = "Esto es una cadena de texto \n";

//Int
$my_int = 10;
$my_int += 4;
echo $my_int ."\n";
echo $my_int -2 ."\n";

//Double
$my_double = 6.5;
echo $my_double ."\n";
echo $my_int + $my_double ."\n";

//Booleano
$my_boolean = true;
echo $my_boolean ."\n"; // True = 1 , False = (nada, cadena vacía)
echo gettype ($my_boolean)."\n";

//Constantes
const MY_CONSTANTE = "Esto es una constante y no se puede modificar";
echo MY_CONSTANTE ."\n";

//Listas
$my_array = [$my_String, $my_int, $my_double];
echo gettype($my_array) . "\n";
echo $my_array[0] . "\n";
array_push($my_array, $my_boolean);
print_r($my_array);

//Diccionario

$my_dict = array("string" => $my_String, "int" => $my_int, "bool" => $my_boolean);
echo gettype($my_dict) . "\n";
print_r($my_dict);
echo $my_dict["int"] . "\n";

//Set
//En PHP no existen los set pero el array unique que es capaz de encontrar solo lo unicos elementos no repetidos
array_push($my_array, "ElKataDev");
array_push($my_array, "ElKataDev");
print_r($my_array);
print_r(array_unique($my_array));

// Control de flujo

for ($index = 0; $index <= 10; $index++) {
    echo $index . "\n";
}

foreach ($my_array as $my_item) {
    echo $my_item . "\n";
}

$index = 0;
while ($index <= sizeof($my_array) - 1) {
    echo $my_array[$index] . "\n";
    $index++;
}

if ($my_int == 11 && $my_String == "Hola") {
    echo "El valor es 11\n";
} elseif ($my_int == 12 || $my_String == "Hola") {
    echo "El valor es 12\n";
} else {
    echo "El valor no es 11\n";
}

$a = 0;
do {
    echo "contador: ". $a ."\n";
  $a++;
} while ($a <= 10);


//Funciones

function print_number(int $my_number) {
    echo $my_number . "\n";
}

print_number(10.5); //Error Implicit conversion from float 10.5 to int loses precisio
print_number(11);
print_number(12);


// Clases

class MyClass {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$my_class = new MyClass("Antonio", 24);
print_r($my_class);
echo $my_class->name . "\n"; //Acceder a una propiedad con ->
$my_class->name = "ElKataDev"; //Modificar propiedad
echo $my_class->name . "\n";
echo gettype($my_class) . "\n";