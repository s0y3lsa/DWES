<!DOCTYPE html>

<html>


<head>

</head>

<body>

<?php
    // Definir la cantidad total en euros
    $cantidad = 67;

    // Calcular el número de billetes de 10 €
    $billetes10 = intdiv($cantidad, 10);
    $resto = $cantidad % 10;

    // Calcular el número de billetes de 5 €
    $billetes5 = intdiv($resto, 5);
    $resto = $resto % 5;

    // El resto son monedas de 1 €
    $monedas1 = $resto;

    // Mostrar el desglose
    echo "Desglose de $cantidad €:<br>";
    echo "Billetes de 10 €: $billetes10<br>";
    echo "Billetes de 5 €: $billetes5<br>";
    echo "Monedas de 1 €: $monedas1<br>";
?>

</body>
</html>


