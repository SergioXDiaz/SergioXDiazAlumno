<?php
// 1. Incluimos el archivo de conexión
// Asegúrate de que en 'conexion.php' la variable $base_datos sea: $base_datos = "Nombre de tu BBDD";
require 'conexion.php';

// 2. Preparamos la consulta SQL
// Seleccionamos específicamente las columnas que pediste
$sql = "SELECT DNI, Nombre, Apellidos, Edad FROM tabla1";

// 3. Ejecutamos la consulta
$resultado = mysqli_query($conn, $sql);

$fila = mysqli_fetch_assoc($resultado);


echo "El nombre del alumn@ es " .$fila["Nombre"]."<br>";

//Si el numero de filas es mayor que 0
// Es porque la consulta de la variable $sql ha sido exitosa.
// En ese caso, tendrá al menos una fila.
while($fila = mysqli_fetch_assoc($resultado)) { //asignacion dentro del while
    echo "El nombre del alumn@ es: " .$fila['Nombre'] ."<br>";
    echo "Apellidos: " .$fila["Apellidos"]."<br>";
}


// 4. Verificamos si la consulta se ejecutó correctamente
if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conn));
}

    //Si el número de filas del objeto resultado es mayor a 0
    // es porque la consulta de la variable $sql ha sido exitosa.
    // En ese caso, se tendrá al menos una fila.

    // USAR EL css para poder crear cosas con los archivos de conexion de la tabla.

    //Debo incrustar php con mysql

?>