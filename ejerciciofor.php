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
    // En el while ponemos la condicion, y en el for ponemos el ultimo argumento en el for va la inicializacoin.
    //la condicion y el argumento.
    do {
        echo "Estoy dentro del Do While. <br>";
        echo $i;
        echo "<br>";
        $i++;

    } //el do se necesita para comprobar por lo menos que se cumple una vez, se ejecuta una vez,
    //el do es cuando necesito ejecutar algo al menos una vez.
    while ($i < 16);

    for ($i = 0; $i < 16; $i= $i+2) {
        echo "Estoy dentro del for. <br>";
        echo $i;
        echo "<br>";
    }
    ?>

</body>
</html>