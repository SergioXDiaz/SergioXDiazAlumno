<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplo del color del coche </h1>
    <?php 
    $color="rojo";
    echo "Mi coche es " .$color . ".<br>"; //Después del br iría el salto de línea!
    ?>

    <h1>Ejemplo del suma de unidades de forma diferente </h1>
    <?php
    $x = 5; //Las variables debemos de declararlas siempre, eso que se te grabe a feugo
    $y = 4;
    
   
    echo "El resultado de la suma de la operación del número " .$x, " y el número " .$y, " es el resultado de ", $x + $y, ".";


    ?>

    <h1> Ejemplo del var_dump que tenemos </h1>
    <?php
     var_dump($x); //Usa el var_dump para obtener el tipo de dato y el numero que es.
    ?>

    <h1> Ejemplo de como realizar un ejercicio de programacion </h1>

    <?php
        

       for ($i = 1; $i <= 30; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "$i :Este numero es múltiplo de 3 y 5, por lo que se mostrará FizzBuzz <br>" ;
        }
        elseif ($i % 3 == 0) {
            echo "$i :Múltiplo de 3, se muestra Fizz <br>";
        }
        elseif ($i % 5 == 0) {
            echo  "$i :El número es múltiplo de 5, por lo que se muestra Buzz <br>";
        }
        else {
            echo "$i :El número no es ni múltiplo ni de 3, ni de 5, por lo que no se muestra nada <br>";
        }
       }


    ?>

</body>
</html>