<?php
// 1. Incluimos el archivo de conexión
// Asegúrate de que en 'conexion.php' la variable $base_datos sea: $base_datos = "Nombre de tu BBDD";
require 'conexion.php';

// 2. Preparamos la consulta SQL
// Seleccionamos específicamente las columnas que pediste
$sql = "SELECT DNI, nombre, apellidos, edad FROM tabla1";

// Ejemplo con filtro en la búsqueda:
/*$sql = "SELECT DNI, nombre, apellidos, edad FROM tabla1
WHERE nombre like 'A%'";*/

// 3. Ejecutamos la consulta
$resultado = mysqli_query($conn, $sql); //Devuelve un objeto

//Verificamos si la consulta se ejecutó correctamente
// Si ha habido un error en la consulta (por error en tabla, columna)
// Devuelve false (!false  es lo mismo que true), entra en el if
/*if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conn));
} //Sino, significa que todo ha ido bien.
else {
    //Si el número de filas del objeto resultado es mayor a 0,
    //es porque la consulta de la variable $sql ha sido exitosa.
    // En ese caso tendrá al menos una fila.
    if(mysqli_num_rows($resultado) > 0){
        while($fila = mysqli_fetch_assoc($resultado)){
            echo "El nombre de la alumn@ es: ".$fila["nombre"]."<br>";
            echo "Apellidos: ".$fila["apellidos"]."<br>";
            echo "DNI: ".$fila["DNI"]."<br>";
            echo "Edad: ".$fila["edad"]."<br>";
        }
    }
}*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Personas</title>
    <style>
        /* Un poco de estilo básico para la tabla */
        table { border-collapse: collapse; width: 80%; margin: 20px auto; font-family: Arial, sans-serif; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        h1 { text-align: center; }
    </style>
</head>
<body>

    <h1>Listado de Datos de Tabla1</h1>

    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!$resultado) {
                die("Error en la consulta: " . mysqli_error($conn));
            } //Sino, significa que todo ha ido bien.
            // Verificamos si hay al menos una fila de resultados
            elseif(mysqli_num_rows($resultado) > 0) {
                // 6. Recorremos cada fila de datos
                // mysqli_fetch_assoc convierte cada fila en un array asociativo
                while($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['DNI'] . "</td>";
                    echo "<td>" . $fila['nombre'] . "</td>";
                    echo "<td>" . $fila['apellidos'] . "</td>";
                    echo "<td>" . $fila['edad'] . "</td>";
                    echo "</tr>";
                }
            } else {
                // Si no hay datos, mostramos una fila avisando
                echo "<tr><td colspan='4'>No hay registros encontrados.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // 7. Liberar memoria del resultado (opcional en scripts pequeños, pero buena práctica)
    mysqli_free_result($resultado);

    // 8. Cerrar la conexión
    mysqli_close($conn);
    ?>

</body>
</html>





