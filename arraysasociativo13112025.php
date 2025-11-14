<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Arrays asociativos*/

    $miArray = array("brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964);

    

    //Crear un array que contemple, nombre, apellido y módulo con sus notas.
    $arrayalumno = array("nombre" => "Sergio",
    "apellido" => "Ruiz",
     "ADSGB" => 7,
      "INWEB" => 6, 
    "PHP"=> 3,
     "SRI" => 7);

    $media =( $arrayalumno["ADSGB"] + $arrayalumno["INWEB"] + $arrayalumno["PHP"] + $arrayalumno ["SRI"] ) / 4;
    
    echo "El nombre del alumno es" .$arrayalumno["nombre"], "y el apellido es" .$arrayalumno["apellido"], "y su media de notas es " 
    .$media,"<br>";

    
    $zapatos =array( "marca"=> "nike", "color"=>"azul",
    "precio"=> 48, "stock"=> 9);
    foreach ($zapatos as $x=>$y)
        //me va a decir que $x vale marca y $y vale nike, y asi sucesivamente

    {
        echo "<br>Etiqueta $x : Etiqueta $y <br>";
        
    } 

    foreach ($arrayalumno as $etiqueta => $valor){
        if ($etiqueta == "ADSGB" OR $etiqueta =="INWEB"){
            echo "Mi nota con agela en la asignatura " .$etiqueta, " es " .$valor, ".<br>"; 
        } 
    }

    //Quiero filtrar el que esta para saber si es un tipo de datos.

    //FUNCTION IS NUMERIC, EN LA PAGINA DE PHPNET, TE DAN DATOS DE VERDADERO FALSO, Y ESO ES LO QUE CALCULA
    //EL SHURRA.https://www.php.net/manual/en/function.is-numeric.php

    //crear un array de producto, que tenga nombre, caracteristicas, precio, stock,etc, con diferentes campos
    //$pera, $naranja, $platano, $nombre => producto, descripcio

    //las varibales seran $pera, $manzana, $naranja, $platano y el nombre sera nmombre, kilos, precios, contientes, acceder
    //al precio de esos productyos.

    $fruta1 =array( "nombre"=> "manzana", "color"=>"rojo",
    "precio"=> 4.8 , "kilos"=> 9,"continente"=> "Europa");

    $fruta2 =array( "nombre"=> "naranja", "color"=>"naranja",
    "precioeur"=> 3.2 , "kilos"=> 6,"continente"=> "America");

    $fruta1["preciodol"] = 5;
    $fruta2["preciodol"] = 3.4;
    
    
    echo "Vamos a añadir elementos al arrays <br>";
    //Añadir al array
       $fruta1 += [
        "stock" => 9,
        "caducidad" => "01/01/26"
    ];
    foreach ($fruta1 as $et => $val) {
        echo "<br> Mi fruta manzana tiene: <br>";
        echo "Etiqueta: " .$et, " <br>Valor: " .$val, "<br>" ;
    }

    //echo "Vamos a añadir elementos al arrays <br>";
   
 
    // $fruits = array("Apple", "Banana", "Cherry");
    // array_push($fruits, "Orange", "Kiwi", "Lemon");
    // foreach ($fruta1 as $etiqueta1 => $valor1) 

    echo "<BR> <BR> Cambiar precios en la fruta";
    //si quiero actualizar el precio dentro del array debo de ponerlo dentro por fuera

    //if ($et == "Caducidad) {
    // $pera[$et] = "marzo" ;}

    //Si quiero que no tenga consecuecias solo uso esta eetiquta

    foreach ($fruta2 as $et2 => $val2) {
        if ($et2 == "precioeur") {
            $fruta2[$et2] = $val2 * 2; //Niño aumentar el valor de precio pera
                         //Es un igual porque voy a cambiar el valor de asignacion, no el del arrays
        }
        echo "Etiqueta: " .$et2 , " Valor " .$fruta2[$et2], ". <br>";
        //Si quiero mostrar el valor correcto de la pera en el array, habré de
        //poner el .$fruta[$et2], sino no lo mostrará correctamente, masón
    }

    //*********************************UNSET*********************************** */
    //Unset elimina elementos borrando memoria

    // unset($fruta1["caducidad"]); //eliminará este elemento del array, no lo voy a ejecutar, no quiero borrar la caducidad todavía


    // *******************************ARRAY_DIF************************************
    //PODEMOS CREAR NUEVOS ELEMENTOS SIN MUSTANG Y SIN 1964. ESTO CON EL ARRAY_DIF
    //$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    // $newarray = array_diff($cars, ["Mustang", 1964]);

    //********************************MIRAR ARRAY_POP O ARRAY_SHIFT PARA PROBAR OPCIONES************** */
    //Mirar array_pop o array_shifht

    // 
    /*
    **********************ASORT****************************
    ARRAY ASORT ORDENARA LOS VALORES DE MENOR A MAYOR
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age); 

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
link: https://www.w3schools.com/php/phptryit.asp?filename=tryphp_array_asort
Tambien se pueden ordenar los valores, con asort, primero van los caracteres especiales, luego la mayuscula,
luego otra forma. Tambien se 


Tambien tienes la opcion de cambiarle el orden del que posees.


/*******************KSORT ***********************************
 * Tambein puedes ordenarlos por clave o key. es decir algo asi como alfabeticamente
 * 
 * 
 * //Tambien puedes hacer las cosas por el array multidimensional
 * $coches = array (
 *         array("marca"=> "Volvo", "stock"=> 22, "ventas" => 18), //ejemplo de si lo quisieras hacer asociativo y multidimensional
 *         array ("BMW,15,13),
 *         array("Saab", 23, 19)
 *          );
 * 
 * 
 * 
 * ****************************************CON ARRAY_MERGE INTERESA SABERLO, ARRAY_RANDOM INTERESA SABERLO*******************
 * *******************************************ARRAY_REPLACE, ARRAY_SUM PARA SUMAR QUE TE PEUDE VENIR FENONMENO PARA LA MEDIA
 * 
 * $a=array(10,15,25);
 * echo array_sum($a)/count($a);
 * ***********************************ARRAY VALUES ES PARA SOLO SACAR LOS VALORES DEL ARRAY****************
 * EL REVERSE Y EL SEARCH, ASORT, KASORT, COUNT, 

*/
 /* Hacer una funcion 
 function myMessage() {
  echo "Hello world!";
}
  
    Para llamar a una funcion será necesario:
    myMessage();
    

*/


    ?>
</body>
</html>