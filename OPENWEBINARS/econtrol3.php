<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 0;
        $respuesta = "Oporto";
        $intentos = 1;

        while($num <= 10){
            echo $num. "<br>"; //caeria bucle infinito
            $num++;

        }

        while($respuesta != "Lisboa") {

            echo " Intento " . $intentos;
            if ($intentos == 3) {
                $respuesta = "Lisboa";
            }
            $intentos++; //he tardado 3 intentos en averiguar cual es la capital de portugal
        }


        
    ?>
</body>
</html>