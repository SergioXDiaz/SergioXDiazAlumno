<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    //  Arrays asociativos

    $fuck = array("Nintendo", "William", "Tumamadesnuda");
    $navegadores = array("navegador1" => "Chrome",
    "navegador2" => "Firefox",
    "navegador3" => "Safari");

    $datos = array("nombre" => "LuisJa",
    "edad" => 39, "profesor" => true, 4 => 100);


    echo "Nabegador 3: " .$navegadores["navegador3"], "<br>";

    echo "Nombre : " .$datos["nombre"], "<br>";

    echo "dato 3: " .$fuck[2]. "<br>"; //Para poder acceder a posiciones de forma sencilla.

    echo "<br>" .var_dump($datos). "<br>";
    echo "<br>";
    var_dump($navegadores);


?>
</body>
</html>