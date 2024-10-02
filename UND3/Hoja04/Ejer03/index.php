<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Incluir la clase Monedero
    include 'monedero.php';

    // Crear dos monederos con cantidades iniciales
    $monedero1 = new Monedero(100);
    $monedero2 = new Monedero(50);

    // Consultar el dinero disponible en los monederos
    echo "Monedero 1: " . $monedero1->consultarDinero() . "€<br>";
    echo "Monedero 2: " . $monedero2->consultarDinero() . "€<br>";

    // Meter dinero en el monedero 1
    $monedero1->meterDinero(50);
    echo "Monedero 1 después de meter 50€: " . $monedero1->consultarDinero() . "€<br>";

    // Intentar sacar dinero del monedero 2
    $monedero2->sacarDinero(20);
    echo "Monedero 2 después de sacar 20€: " . $monedero2->consultarDinero() . "€<br>";

    // Intentar sacar más dinero del que hay disponible en monedero 2
    $monedero2->sacarDinero(100);

    // Consultar el número de monederos creados
    echo "Número de monederos creados: " . Monedero::obtenerNumeroMonederos() . "<br>";

    // Destruir un monedero
    unset($monedero1);

    // Consultar el número de monederos restantes
    echo "Número de monederos después de destruir uno: " . Monedero::obtenerNumeroMonederos() . "<br>";
?>
</body>
</html>