<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Variables del clima
$a = 0; // 0 = no llueve, 1 = sí llueve
$b = 0; // 0 = no hace viento, 1 = sí hace viento
$c = 38; // temperatura en ºC

// Lógica para decidir si llevar paraguas o no
if ($a == 1 && $b == 0) {
    echo "Está lloviendo y no hay viento. Lleva paraguas.";
} elseif ($a == 1 && $b == 1) {
    echo "Está lloviendo y hace viento.";
} elseif ($a == 0 && $b == 0 && $c > 37) {
    echo "Hace mucho calor y no llueve ni hace viento. Lleva paraguas para quitarte del sol abrasador!.";
} else {
    echo "No necesitas paraguas.";
}
/*Procurar si podemos anidar los ifs*/

?>
</body>
</html>