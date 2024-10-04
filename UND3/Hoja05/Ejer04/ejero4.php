<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
    //incluir las clases
    require_once 'clases.php';

    //array de productos
    $Productos=[];

    // Crear 2 productos de Alimentacion
    $productoAlimentacion1 = new Alimentacion("A001", 10.5, "Leche", 12, 2024);
    $productoAlimentacion2 = new Alimentacion("A002", 8.0, "Pan", 10, 2023);

    //crear 2 productos de electronica
    $productoElectronica1 = new Electronica("E001", 300.0, "Smartphone", 24);
    $productoElectronica2 = new Electronica("E002", 150.0, "Tablet", 12);

    // Añadir los productos al array
    $Productos[] = $productoAlimentacion1;
    $Productos[] = $productoAlimentacion2;
    $Productos[] = $productoElectronica1;
    $Productos[] = $productoElectronica2;
    ?>
</body>
</html>