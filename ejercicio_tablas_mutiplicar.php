<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Tabla multiplicar del 1 al 10
   $tablas = 10;
   $numeros = 10;

   for ($i = 1; $i <= $tablas; $i++) {
    echo "<h3>Tabla del $i</h3>";
    for ($j = 0; $j < $numeros; $j++) {
        $resultado = $i * ($j + 1);
        echo "$i x " . ($j + 1) . " = $resultado <br>";
    }
   }
   // Cubos de los números del 1 al 10
   $numeros = 10;
   for ($i = 1; $i <= $numeros; $i++) {
    $cubo = $i ** 3;
    echo "El cubo de $i: " .$i * $i * $i . "<br>";
   }

   echo "<br><br> 3.- Array asociativos para deportes:<br>";
   /* Array que almacene información sobre varios deportes:

    $Baloncesto = array(
        "Horario" => "jueves y viernes",
         "Edad" => 0,
         "Equipación" => "Si",
         "Frecuencia" => "Semanal")
    );
        - Baloncesto:
                - Horario: jueves y viernes.    
                - Precio aficiliación: 15€/mes.
                - Edad media jugadores: Se calcula a partir de otro array.
                - Equipación oficial: Si/No.
                - Frecuencia partidos competeción: Semanal.

        - Padel:
                - Horario: lunes y miércoles.    
                - Precio aficiliación: 30€/mes.
                - Edad media jugadores: Se calcula a partir de otro array.
                - Equipación oficial: Si/No.
                - Frecuencia partidos competeción: Mensual.
        - Futbol:
                - Horario: Sábados.    
                - Precio aficiliación: 5€/mes.
                - Edad media jugadores: Se calcula a partir de otro array.
                - Equipación oficial: Si/No.
                - Frecuencia partidos competeción: Semanal.

$Baloncesto= array(
    "Nombre" =>"Edad") // De este array se saca la media de la edad
$Padel= array(
    "Nombre" =>"Edad") // De este array se saca la media de la edad
$Futbol= array(
    "Nombre" =>"Edad") // De este array se saca la media de la edad


*/

    $baloncesto = array (
        "Horario" => "jueves y viernes",
        "Precio" => 10,
        "Edad" => 0,
        "Equipacion" => "Si",
       
    );




// 1.- Calculo de la edad media de los deportistas

    //Media Baloncesto
    $media = 0;
    foreach ($PersonasB as $nombre => $edad){
        $media = $media + $edad;
        echo "Media: $media <br>";
    }
    $media = $media/count($PersonasB);

    echo "La media es: " .$media . "<br>";

    //Hacer funciones para calcular la media



    //Insertala la edad en el array correspondiente


    //b.- Inserta la edad en el array correspondiente 

    // c.- (LO QUE VA A PEDIR DE ARRAYS, QUE SE INSERTE Y QUE SE BORRE) */
    // el nombre del equipo federado

    //d. - Elimina la información referente a la frecuencia.
    

    // Generar un array para almacenar información de empresas, con la siguinte estructura:

            //empresas
        //nombre: nombre de las empresas
        // CIF/NIF: X12345678
        // Teléfono: 695313209
        // Localidad: Ecija
        // Facturacion: 3000€ (esto es una cadena y el simbolo esta puesto a posta)

    //0.- Une todos los arrays anteriores
    //1. - A partir del paso anterior, imprime  toda la información de la empresa con el siguiente formato:
        // "La empresa [nombre empresa] con CIF [cif], tiene sede en [localidad] y
        // la su factura es de [facturacion]."

        // 2.- Crea una variable "BuscarFacturación" que almacene el valor medio de la
        // facturacion de las 5 empresas. (calcular media de la facturacion) (hacer funcion para eliminar el euro)
    
        // 3 .- Imprime 

?>


</body>
</html>