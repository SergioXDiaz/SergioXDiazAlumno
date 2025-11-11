<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $i = 16;
    while ($i < 16 ){

        echo "Estoy dentro del while. <br>";
        echo $i;
        echo "<br>";
        $i++;
    }

    //Siempre se ejecuta al mneos una vez el contenido del do.

    do {
        echo "Estoy dentro del Do While. <br>";
        echo $i;
        echo "<br>";
        $i++;

    } while ($i < 16);

    ?>
    
</body>
</html>