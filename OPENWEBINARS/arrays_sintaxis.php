<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*******************ARRAYS SINTAXIS************************* */
    //Los arrays son variables que pueden almacenar múltiples valores
    ECHO "<H1> Ejemplo de arrays </h1>";
    $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

    $numeros = array(10,20,30,40); // es un array con un solo elemento de valor 10

    $nombres = array(10);

    $datos = array();

    $valores = [10,20,30];

    echo $dias[3];

    echo "<br>";

    var_dump($valores); //VARIABLE CLAVE PARA MOSTRAR LOS VALORES POR PANTALLA SHURRA
    
    //La primera posición es la cero churra
    //Para mostrar arrays por pantalla, lo suyo es usar var_dump

    /************************ARRAYS ASOCIATIVO ************************* */
    
    ?>
</body>
</html>