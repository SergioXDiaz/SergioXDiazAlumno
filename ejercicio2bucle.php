<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Variables que representan el clima
$a = 1; // 0 = no llueve, 1 = sí llueve
$b = 0; // 0 = no hace viento, 1 = sí hace viento

// Lógica para decidir si llevar paraguas o no
if ($a == 1 && $b == 0) {
    echo "Está lloviendo y no hay viento. Lleva paraguas.";
} elseif ($a == 1 && $b == 1) {
    echo "Está lloviendo y hace viento.";
} else {
    echo "No llueve. No necesitas paraguas.";
}
?>

</body>
</html>