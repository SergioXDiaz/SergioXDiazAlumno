<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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

// Si las claves son strings, la segunda sobreescribe a la primera con el merge
// Sino quiero que se sobreescriba el valor, debo usar el "+"
$productos = $ofertas + $regulares;

$productos['006'] = "Kiwi";
$productos['007'] = "Cereza";
$productos['008'] = "Mandarina";
//para devolver los que si estan en oferta
$oferta = array_diff($ofertas, $regulares);

//El ksort me permitirá ordenar los arays por sus claves, mi rey.
ksort($productos);

foreach ($productos as $numero => $nombre) {
    echo "$numero - $nombre <br>";
}

// Pera verde no se considera en oferta porque aparece en ambos arrays, 
// El array diff solo tiene en cuenta los primero, por lo que, al aparecer en ambos arrays, no aparecerá
echo "<h1> Están en oferta </h1>";
foreach($oferta as $numero => $nombre) {
    
    echo "$numero - $nombre <br>";
}
// Cuando dos arrays contienen la misma clave, al unirlos con array_merge(), el producto del segundo array sobrescribe al del primero, quedando en el array final únicamente el valor asociado a la última aparición de esa clave.
// El array merge, usa el producto sobreescribe el producto del primer array, dejando únicamente el segundo,
// Mientras que con +, se mantiene el valor del primer array y se descarta los posteriores con la misma clave

// EJERCICIO 2
echo "<h1> Ordenación de datos de empleados (2) </h1>";
$empleados = [
    'E105' => 'Carlos Gutiérrez',
    'E101' => 'Ana López',
    'E103' => 'Benito Pérez',
    'E102' => 'Diana Castro', 
];
// Por ID DE EMPLEADO, CLAVE
ksort($empleados);

foreach ($empleados as $id => $nombre){
    echo "$id - $nombre <br>";
};

echo "<h1> Ordenación de empleados de forma ascendente por valor </h1>";
asort($empleados);
foreach ($empleados as $id => $nombre) {
    echo "$id - $nombre <br>";
};


/*echo "<h1> Procesamiento y cálculo de notas </h1>";
$notas_t1 = [
    'Matemáticas' => 7.5,
    'Lengua' => 8.0,
    'Historia' => 6.0,
];

$notas_t2 = [
    'Matemáticas' => 8.5,
    'Inglés' => 9.0
];


$notas = array();

//Esto se hace porque así podremos añadir el array luego
foreach ($notas_t1 as $asignatura => $nota) {
    $notas[$asignatura] = array($nota);
}

foreach ($notas_t2 as $asignatura => $nota) {
    $notas[$asignatura][] = $nota;
}

foreach ($notas as $asignatura => $valor) {
    echo "$asignatura - " .implode (", ", $valor) . "<br>"; // Es necesario usar el implode,
    //para que funcione churra
    $media = array_sum($valor) / count($valor);
    echo "$asignatura (la media) -  " . number_format($media, 2) . "<br>";

    echo "<h1> Media total de las notas </h1>";
   
    $total += $media;

    $media_curso = $total / $asignatura ;
    echo "<h1> Media total del curso por asignatura: " .number_format($media_curso, 2). "</h1>";
}




*/
$notas_t1 = [
    'Matematicas' => 7.5,
    'Lengua' => 8.0,
    'Historia' => 6.0,
];

$notas_t2 = [
    'Matematicas' => 8.5,
    'Ingles' => 9.0
];

$notas = array();

foreach($notas_t1 as $asi => $nota) {
    $notas[$asi]= array($nota);
};

foreach($notas_t2 as $asi => $nota) {
    $notas[$asi][] = $nota;
}

foreach($notas as $asi => $nota) {
    
    echo "$asi - " .implode (",", $nota) ."<br>";
    
    $media = array_sum($nota) / count($nota);
    echo "La media de cada $asi es: $media <br>" ;

}

$total = 0;
$asignaturas = count($notas);

foreach ($notas as $asi => $nota) {
    
    $media = array_sum($nota) / count($nota);
    $total += $media;
}

$media_curso = $total /$asignaturas;
echo "<h1> Media total del curso por asignatura " . number_format($media_curso, 2) . "<br> </h1>";
?>
</body>
</html>