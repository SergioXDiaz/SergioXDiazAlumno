<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Arrays asociativos*/

    $miArray = array("brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964);

    //Crear un array que contemple, nombre, apellido y módulo con sus notas.
    $arrayalumno = array("nombre" => "Sergio",
    "apellido" => "Ruiz",
     "ADSGB" => 7,
      "INWEB" => 6,
    "PHP"=> 3,
     "SRI" => 7);

    $media =( $arrayalumno["ADSGB"] + $arrayalumno["INWEB"] + $arrayalumno["PHP"] + $arrayalumno ["SRI"] ) / 4;
    
    echo "El nombre del alumno es" .$arrayalumno["nombre"], "y el apellido es" .$arrayalumno["apellido"], "y su media de notas es " 
    .$media,"<br>";

    
    $zapatos =array( "marca"=> "nike", "color"=>"azul",
    "precio"=> 48, "stock"=> 9);
    foreach ($zapatos as $x=>$y)
        //me va a decir que $x vale marca y $y vale nike, y asi sucesivamente

    {
        echo "<br>Etiqueta $x : Etiqueta $y <br>";
        
    } 

    foreach ($arrayalumno as $etiqueta => $valor){
        if ($etiqueta == "ADSGB" OR $etiqueta =="INWEB"){
            echo "Mi nota con agela en la asignatura " .$etiqueta, " es " .$valor, ".<br>"; 
        } 
    }

    //Quiero filtrar el que esta para saber si es un tipo de datos.

    //FUNCTION IS NUMERIC, EN LA PAGINA DE PHPNET, TE DAN DATOS DE VERDADERO FALSO, Y ESO ES LO QUE CALCULA
    //EL SHURRA.https://www.php.net/manual/en/function.is-numeric.php

    //crear un array de producto, que tenga nombre, caracteristicas, precio, stock,etc, con diferentes campos
    //$pera, $naranja, $platano, $nombre => producto, descripcio

    //las varibales seran $pera, $manzana, $naranja, $platano y el nombre sera nmombre, kilos, precios, contientes, acceder
    //al precio de esos productyos.

    
    ?>
</body>
</html>