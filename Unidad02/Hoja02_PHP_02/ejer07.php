<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">

</head>

<body>
    <?php

    // Definir las dos variables
    $a = 5;
    $b = 10;

    // Mostrar los valores iniciales
    echo "Valores iniciales: <br>";
    echo "a = $a, b = $b<br>";

    // Intercambiar los valores usando una variable temporal
    $temporal = $a;
    $a = $b;
    $b = $temporal;

    // Mostrar los valores después del intercambio
    echo "Valores después del intercambio: <br>";
    echo "a = $a, b = $b<br>";

    ?>

</body>

</html>

