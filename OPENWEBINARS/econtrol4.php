<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Estructura de control de flujo do while (similar a do while)
    $valor = 10;

    while($valor != 10) {
        echo "Dentro del while";
    }


    //entrará por lo menos una vez el do while
    do {
    echo "Dentro del do while";
    } while($valor!=10);
?>
</body>
</html>