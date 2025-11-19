<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Operadores aritméticos
    //suma (adicion)  $a + $b;
    // resta:  $a  - $b;
    // multiplicacion:  $a  *  $b;
    //division: $a  /  $b;
    //modulo: $a  %  $b; -- EL RESTO DE LA DIVISION
    //exponential: $a  **  $b;
    echo "<h1> Se toman varios valores y se produce otro valor</h1>";
    $a = 5;
    $b = 2;

    //PODRIA SUMARLO YA DIRECTAMENTE AQUI CREANDO UNA TERCERA VARIABLE
    $resto = $b % $a ;
    $potencia = $a ** $b;
    echo "<h1> Valores de las variables </h1>";
    echo "a = " .$a. "<br> b = " .$b . "<br>";
    echo "SUMA: RESULTA EN " .$x = $a + $b ."<br>";
    echo "El resto de la division es $resto <br>";
    echo "La potencia es $potencia <br>";

    echo "<h2> Expresiones abreviadas de operacion </h2>";
    
    $num1 = 5;
    $num2 = 10;
    $num3 = 0;

    //ASIGNACION BASICA
    $num1 = $num3;

    echo "Asignación básica: " .$num1, "<br>";

    //OTROS OPERADORES MÁS COMPLEJOS
    $num1+= $num2;


    echo "Numero 1 = numero 1 + numero 2 es igual a " .$num1;

    //ERROR DE NOVATO, UN IGUAL ES UN COMPARADOR DE ASIGNACIÓN MIENTRAS QUE UNO == ES UN COMPARADOR DE DOS LÍNEAS
    //El distinto es el != es el símbolo de admiración con el igual
    // <> tambien podemos indicar distinto así
    // === Intenta comparar que el valor sea igual y del mismo tipo
    echo "<h1> Ejemplos de comparadores </h1>";

    $num4 = 5;
    $num5 = 10;
    $num6 = 5;
    $valor1= "5";

    //Operadores de comparación
    if ($num4 == $num5 ) {
        echo "Son iguales el numero4 en tu culo mi aparato y el 5, por el culo te la hinco <br>";
    } else {
        echo "No son iguales, sube a debatir shurra. <br>";
    }


    echo "<br><b>Comparación de diferentes</b><br><br>";
     if ($num4 != $num5 ) {
        echo "Son diferentes <br>";
    } else {
        echo "Son iguales, sube a debatir shurra. <br>";
    }

    echo "<h1>Comparación de valores exactamente idénticos</h1>";
    if ($num4 === $num6){
        echo "Los valores num1 y valor 1 son idénticos";
    }
    else {
        echo "No son idénticos";
    }
    ?>
</body>
</html>