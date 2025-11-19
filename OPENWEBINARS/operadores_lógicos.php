<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Respecto a los operadores lógicos encontramos las siguientes operaciones
        //El and es cuando $a and $ b es decir, un AND de toda la vida, recuerda
        //Sabes lógica humana
        //El and es para cuando coindicen ambos conjuntos tambien puedo usar &&
        //Si una persona tiene gorra y es de soria podra seguir el curso
        //si una persona tiene gorra o es de soria podra seguir el curso.

        //$a and $b == $a && $b //Si una persona tiene gorra y es de soria podra seguir el curso
        //$a or $b == $a || $b  //si una persona tiene gorra o es de soria podra seguir el curso.

        //$a xor $b //Solo se cumple cuando una de las condiciones resulta en verdad. es decir que si una persona es de soria y lleva gorra no podrá seguir el curso, 
        //en cambio cuando es o de soria o solo lleva gorra, se cumplirá, es una forma útil de dejar valores exactamente exactos afuera.
        //para que no pille el AND con el OR.
        //!$a ESTA ES LA FORMA DE NEGAR.

        $num1= 5;
        $num2 = 10;
        $num3 = 5;
        $activo1 = true;
        $activo2 = false;

        if ($num1 == 5 and $num1 == $num3){
            echo "Dentro del if";

        }

        echo "<br>";
        if ($num1 == 5 || $num1 == $num2){
            echo "Dentro del segundo if";

        }

        echo "<br>"; //Si fuera num3 no entraría porque se cumplen las dos condiciones, es un OR puro
        if ($num1 == 5 xor $num1 == $num2){
            echo "Dentro del tercer if";

        }
        
        echo "<br>";
        //Cómo en este caso lo he negado, ya no entraría dentro del cuarto if
        if (!$activo1) { //Estaria diciendo que si esto es igual a true que me lo muestre, no será necesario indicarlo
            echo "Dentro del cuarto if";

        }

?>
</body>
</html>