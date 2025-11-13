<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $numero = readline("Introduce un número: ");

    if ($numero < 10) {
        echo "El número es menor que 10 <br>";
    }
    elseif ($numero > 10) {
        echo "El número es mayor que 10 <br>";
    }
    elseif ($numero == 10) {
        echo "El número es igual que 10 <br>";
    }
    else {
        echo "No has introducido un número o tu valor no es válido";
    }
?>

</body>
</html>