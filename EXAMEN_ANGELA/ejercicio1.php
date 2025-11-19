<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Moneda de la suerte
    //Simula el lanzamiento de dos monedas mediante numeros aleatorios
    //Cada vez que ambas salgan cara significara "Suerte doble".
    //Debes seguir lanzando hasta conseguir 3 veces "Suerte doble".
    // Si consigues dos suertes dobles 2 veces seguidas a 0 el contador
    // Mostrar tiradas totales

    $tiradas = 0;
    $seguidas = 0;
    $suerte = 0;

    while ($suerte < 3) {
        $mon1=rand(0,1);
        $mon2=rand(0,1);

        $tiradas++;

        echo "Tirada $tiradas: Moneda1: $mon1 Moneda 2: $mon2 <br>";
        if ($mon1 == 0 and $mon2 == 0) {
           $suerte++;
           echo "He sacado dobles, total de dobles $suerte <br>";
           if ($seguidas == 0) //no habia sacado seguidas antes 
           {
                $seguidas = 1;
           } else { //la vez anterior ya saque dobles
                $suerte = 0; //reseto los dobles porque he sacado 2 veces seguidas;
                $seguidas = 0; //Reseteo las seguidas
            echo "He sacado dos veces seguidas, se reseta el contador";
        }
       

        
    }
    else {
        //Reseteo las seguidas paorque no he sacado 0
        $seguidas = 0;

    }

}
echo "Han sido necesarias $tiradas tiradas para obtener 3 dobles no seguidos";
    ?>
</body>
</html>