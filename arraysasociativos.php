<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

     // Array de productos en oferta $ofertas = [ '001' => 'Manzana Roja', '003' => 'Pera Verde', '005' => 'Naranja', ]; 
     // Array de productos regulares $regulares = [ '002' => 'Plátano', '003' => 'Pera Verde', '004' => 'Uva Negra', ]; 
      //Se requiere: 1.a) Combinar en un único arrays todos los productos, llámalo “productos” 
      // 1.b) Indica qué sucede con aquellos productos que tienen la misma clave con distinto valor. 
      // 1.c) Partiendo del array “productos”, añade en el mismo 2 o 3 productos nuevos. 
      // 1.d) Utiliza la función array_diff para obtener todos los productos que no están en oferta. 

        $ofertas = [
            '001' => 'Manzana Roja',
            '003' => 'Pera Verde',
            '005' => 'Naranja',
        ];
        $regulares = [
            '002' => 'Plátano',
            '003' => 'Pera Verde',
            '004' => 'Uva Negra',
        ];
        $productos = array_merge($ofertas, $regulares); //Array que genera un único arrays

        //Se puede realizar de las dos formas
        //También se puede realizar usando el operador +.
        //También se pudiera realizar usando $productos = $ofertas + $regulares;
        echo "<h3>Array combinado de productos:</h3>";
        foreach ($productos as $clave => $valor) {
            echo "Clave: $clave - Valor: $valor<br>";
        }
        echo "<h3>Productos nuevos añadidos:</h3>";
        $productos['006'] = 'Mango';    
        $productos['007'] = 'Piña';
        foreach ($productos as $clave => $valor) {
            echo "Clave: $clave - Valor: $valor<br>";
        }
        $no_oferta = array_diff($productos, $ofertas);
        echo "<h3>Productos que no están en oferta:</h3>";
        foreach ($no_oferta as $clave => $valor) {
            echo "Clave: $clave - Valor: $valor<br>";
        }


        //EJERCICIO 2, QUE 
        //2. Ordenación de Datos de Empleados: Crear una función para ordenar un array asociativo de empleados: 1. Por su clave (ID de empleado) de forma ascendente, usando ksort. 
        $empleados = [ 'E105' => 'Carlos Gutiérrez', 'E101' => 'Ana López', 'E103' => 'Benito Pérez', 'E102' => 'Diana Castro', ]; 
        ksort($empleados);
        echo "<h3>Empleados ordenados por ID (clave) ascendente:</h3>";
        foreach ($empleados as $clave => $valor) {
            echo "Clave: $clave - Valor: $valor<br>";
        }
        //2. Por su valor (Nombre del empleado) de forma ascendente, usando asort. PHP 
        $empleados = [ 'E105' => 'Carlos Gutiérrez', 'E101' => 'Ana López', 'E103' => 'Benito Pérez', 'E102' => 'Diana Castro', ]; 
        asort($empleados);
        echo "<h3>Empleados ordenados por Nombre (valor) ascendente:</h3>";
        foreach ($empleados as $clave => $valor) {
            echo "Clave: $clave - Valor: $valor<br>";
        }   

        //el merge sobreescribe mientras que el otro no, el mas no lo hace.


        //Ejercicio 3
        // Notas del primer trimestre
$notas_t1 = [
    'Matemáticas' => 7.5,
    'Lengua'      => 8.0,
    'Historia'    => 6.0,
];

// Notas del segundo trimestre
$notas_t2 = [
    'Matemáticas' => 8.5, // Sobrescribe el valor anterior al unir
    'Inglés'      => 9.0,
];

// 1. Unir arrays (el segundo sobrescribe claves repetidas del primero)
$notas_totales = array_merge($notas_t1, $notas_t2);

// 2. Mostrar notas por asignatura
echo "<h3>Notas por asignatura:</h3>";
foreach ($notas_totales as $asignatura => $nota) {
    echo $asignatura . ": " . $nota . "<br>";
}

// 3. Calcular la media de todas las notas
$suma = array_sum($notas_totales);
$cantidad = count($notas_totales);
$media = $suma / $cantidad;

echo "<h3>Media de todas las notas: " . number_format($media, 2) . "</h3>";

?>

    ?>
</body>
</html>