<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Examen parte 1
    //"Ejercicio 1 parte 1 añadir arrays <br>";

    $productos_basicos = array (" cable hdmi ", " baterias AA ", " pendrive 128gb ");
    //echo var_dump($productos_basicos);

    $nombre_producto_extra = array ("  adaptador de red "); // No se si los espacios añadidos me los ha tomado correctamente
    // del pdf, entiendo que si
     // echo var_dump($nombre_producto_extra);

    $productos_basicos = array_merge($productos_basicos, $nombre_producto_extra);
    // echo var_dump($productos_basicos);
   

    // Ejercicio 1 parte 2
    $etiqueta_final = trim($productos_basicos[3]);
    $etiqueta_final = strtoupper($productos_basicos[3]);
    $longitud = strlen($etiqueta_final);

    echo "<h1> Ejercicio 1 parte 2 </h1>";
    //echo "Para mostrar la longitud hemos empleado var_dump <br>";
    //echo var_dump ($etiqueta_final);
    echo "La longitud de númerica de mi etiqueta_final es de " .$longitud. ".";

    //Ejercicio 1 parte 3
    
    unset($productos_basicos[01]);
    echo var_dump($productos_basicos);

    
    //Ejercicio  2 parte 1
    
    //Orden de pedidos

    echo "<h1> Ejercicio 2 parte 1 </h1>";
    $i = 1;

    while ($i <=10){
        if ($i % 2 == 0){
            echo "<br>";
            echo "Envío rápido con el número " . $i . "<br>";
        }
        $i++;
    }
    

    //Ejercicio 2 parte 2

    echo "<h1> Ejercicio 2 parte 2 </h1>";
    $unidades_compradas = 180;
    $precio_unitario = 8.50;

    if ($unidades_compradas >= 150){
        //Aplicación del descuento del 20 %
        $precio_total = $precio_unitario * $unidades_compradas;
        $descuento1 = 0.20;
        $precio_final_1 = $precio_total * $descuento1;
        $precio_total = $precio_total - $precio_final_1;

        echo "El precio total final para una compra superior de 150 unidades será de " . $precio_total ."<br>";
        echo "El descuento aplicado será del $descuento1 (20%) <br>";
    } elseif ($unidades_compradas >= 50 AND $unidades_compradas < 150){
        //Aplicacino del descuento del 10 %
        $precio_total = $precio_unitario * $unidades_compradas;
        $descuento2 = 0.10;
        $precio_final_1 = $precio_total * $descuento2;
        $precio_total = $precio_total - $precio_final_1;
          echo "El precio total final para una compra entre 150 unidades y 50 será de " . $precio_total . "<br>";
          echo "El descuento aplicado será del $descuento2 (10%) <br>";
    } else
    {
         $precio_total = $precio_unitario * $unidades_compradas;
        echo "El precio total final será de $precio_total <br>";
        echo "El descuento será ninguno";
    };
        
    echo "<h1> Ejercicio 2 parte 3 </h1>";
    
        $stock_inicial = 60;

        while($stock_inicial > 55){
            $stock_inicial--;
            echo "Se irá disminuyendo cada vez los resultados de stockaje: " .$stock_inicial . "<br>";
            if ($stock_inicial == 55){
                echo "El stock final será de " .$stock_inicial ;
            }
        };
  

        //ejercicio 3 parte 1

        echo "<h1> Ejercicio 3 parte 1 </h1>";
        $nota = "A";

        if($nota == "A"){
            echo "Resultado Aprobado - Prioridad Alta";
        }
        elseif($nota == "B"){
            echo "Resultado Aprobado - Prioridad Media";
        }
        else{
             echo "Pendiente de revisión";
        };


        echo "<h1> Ejercicio 3 parte 2 </h1>";
        $codigo_seguridad = "PROD-XS-45";

        if (strlen($codigo_seguridad > 10) AND str_contains($codigo_seguridad, "XS")){
            echo "Código Verificado y Pequeño.";
        }
        else {
            echo "Código Requiere Revisión Manual. ";
        }
           
        



    

   


    


?>
</body>
</html>