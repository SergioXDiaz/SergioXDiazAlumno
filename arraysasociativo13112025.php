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
    .$media;

    
    
    ?>
</body>
</html>