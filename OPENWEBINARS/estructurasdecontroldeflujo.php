<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Encontramos dos tipos de estructuras de control de flujo, la de selección
    //y la de iteracción

    //Las de seleccion me permiten seleccionar valores de forma sencilla
    //Estas son el if, else, elseif, switch

    //Dentro del tipo de estructuras de iteración encontramos el for, while, do while, foreach

    //Estructura de control del flujo if
    $nota1=7;
    $nota2=8;
    $nota3=5;

    if ($nota1 >= 5) {
        echo "Aprobado <br>";
    }

    if ($nota3 == 5) {
        echo "Dentro del primer if <br>";
        if ($nota2 < 9) {
            echo "Dentro del segundo if <br>"; //no va a entrar
        }
    }

    if ($nota1 >= 5 and $nota2 >= 5){
        echo "Curso aprobado <br>";
    }

    $dia = 3;

    switch ($dia) {
        case 1:
            echo "fimosis";
            break;
        case 2:
            echo "dia2";
            break;
        case 3:
            echo "dia3";
            break;
        default:
        echo "dia no valido";
    }

    //tambien podemos comparar textos
    $diasemana = "Miercoles";
        switch($diasemana) {
            case "Lunes":
                echo "Lunático lunes";
                break;
            case "Martes":
                echo "Martes martín";
                break;
            case "Miercoles":
                echo " <br> Lo que sufrio el dani churra";
                break;
            default;
        }

    //for me permite un numero conocido de veces el for.
    //íria que mientras el for vale uno hasta el 10

    $num5 = 5;
    echo "<h1> Bucles con el for </h1>";
    for ($i = 1; $i<= 10; $i++) { //Importante poner punto y coma
        echo "<br> Valor: " .$i. "<br>";
    }

      
    
    for ($j = 10; $j>= 1; $j--) { //Importante poner punto y coma
        echo "<br> Valor: " .$i. "<br>";
    }

    for ($k = 0; $k<= 100, $k = $k + 2;){
        echo $k;
        echo "<br>";
    }
?>
</body>
</html>