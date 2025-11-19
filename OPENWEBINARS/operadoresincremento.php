<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Operadores de decremento/incremento
        $num1 = 5;
        $num2 = 10;

        echo $num1 , "<br>";
        
        echo "<b> TITULO: Procedo a incrementar en una unidad num1 POSTINCREMENTO</b> <br>";

        echo $num1++, "<br>"; //ES DECIR QUE SI USO ESTO EN LA LINEA HASTA QUE NO HAGA EL ECHO NO SE INCREMENTA
        //mientras que si hago esto: ++$num1; se incrementa antes de usarla

        //echo $num1;
        
        echo "<br>" .$num1 ,"<br>";

        //Usaremos la variable preincremento
        echo "<b> TITULO: Procedo a incrementar en una unidad num1 PREINCREMENTO</b> <br>";
        echo "num2: " .$num2;
        echo "<br> El número 2 es " .++$num2 , "<br>";
        echo "El numero 2 es " .$num2;

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

        



?>
</body>
</html>