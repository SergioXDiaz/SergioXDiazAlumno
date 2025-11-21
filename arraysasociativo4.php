<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $descuento1 = 0.15;
    $descuento2 = 0.20;
    $zapatillas = array ("código" => "100", 
    "modelo" => "Nike", 
    "nombre" => "NIKEPRO12", 
    "precio" => 101,
    "color" => "Negro",
    "stock" => 4
);


    // Si el precio es mayor a 100 euros haz un 15 % de descuento
    foreach ($zapatillas as $clave => $valor) {
        if ($clave == "precio" AND $valor >= 100) {
            $zapatillas['precio'] = $zapatillas['precio'] - ($zapatillas['precio'] * 0.15);
            echo "El valor de las zapatillas será " . $zapatillas['precio']. "<br>";
        }
        elseif ($clave == "color" AND strtolower($valor) == strtolower("Negro")) {
            $zapatillas['precio'] =$zapatillas['precio'] - ($zapatillas['precio'] * 0.20);
            echo "El valor de las zapatillas será de " .$zapatillas['precio'] . "<br>";

        }
        elseif ($clave == "stock" AND $valor < 5) {
            $zapatillas['precio'] =$zapatillas['precio'] - ($zapatillas['precio'] * 0.05);
            echo "El valor de las zapatillas será de " .$zapatillas['precio'] . "<br>";
    }
    elseif ($clave == "stock" AND $valor > 10) {
          $zapatillas['precio'] =$zapatillas['precio'] - ($zapatillas['precio'] * 1.01);
            echo "El valor de las zapatillas será de " .$zapatillas['precio'] . "<br>";
    }

    }
    
    ?>
</body>
</html>