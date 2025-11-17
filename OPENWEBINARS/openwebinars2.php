<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- ***********************PASAR VARIABLES Y VALORES A UNA URL *********************************** 
     Poniendo enlace para clicar y para que se tome valores una url de otra pagina de php
     Abajo lo tengo explicado mejor -->
    <a href = "destino.php?nombre=Luis&cargo=Profesor"> 
        Pasar las variables a destino.php
    </a>
    <!-- La variable ? nos va a permitir cascarle variables al php -->
    <?php 
    /*******************CONSTANTES************************* */
    //Constantes no varían su valor
    //Siempre deben ir en mayúsculas.
    ECHO "<H1> Ejemplo de constantes </h1>";
    const PI = 3.14;
    echo PI;


    // En ejecución, no puedo cambiar el valor de una constante churra:
    // Ejemplo de PI = PI + 1;

    //Otra manera de definir constantes 
    define("NOMBRE", "SergioDiaz");
    echo NOMBRE;

    

?>
</body>
</html>