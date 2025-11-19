<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num = 5;
        for ($k=0; $k<=100; $k++) {
            if ($k % 2 == 0){
                echo $k, "<br>";
            }
        };

        //Tabla de multiplicar de un numero

        echo "<h1> Tabla de multiplicar de un numero </h1>";

        for ($i=1; $i<=10; $i++){
            echo $i * $num;
            echo "<br>";

        }

        //el while primero comprueba y luego ejecuta

        
?>
</body>
</html>