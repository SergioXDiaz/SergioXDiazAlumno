<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $notas = array(5,3,3,2,7,10,9,8,2,4);
    $aprobados= 0;
    $suspensos = 0;
    $elementos = count($notas);
    //inicializacion de las variables
    //while
    $i = 0;
    while($i < $elementos){ //mientras i sea menor que el numero de elementos del array
        if ($notas[$i >=5]) { //La nota es mayor o igual a 5
            $aprobados = $aprobados + 1; //%aprobados++;
        } else {
            $suspensos = $suspensos + 1;
        }
        $i++;

        

    }

        echo "Los aprobados son :" .$aprobados . "br";
        echo "Los suspensos son: " . $suspensos . "<br>";
        //no me funciona de forma correcta;
?>
</body>
</html>