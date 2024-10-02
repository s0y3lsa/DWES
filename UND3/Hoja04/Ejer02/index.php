<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <?php
    //Incluimos la clase Coche
    require_once 'Coche.php';

    //Objeto clase coche 
    $miCoche = new Coche('ABC1234',50);

    //mostrar el estado inicial del coche
    print $miCoche->mostrarCoche(). "<br>";

    //Acelerar el coche 
    $miCoche->acelera(30)."<br>";
    print "Al acelerar ".$miCoche->mostrarCoche()."<br>";
    //Frenar el coche 
    $miCoche->frena(60);
    print "Despues de frenar: ". $miCoche->mostrarCoche()."<br>";

    //Acelerar mas el coche 
    $miCoche->acelera(100)."<br>";
    print "Acelerar mas alla del limite ". $miCoche->mostrarCoche()."<br>";

    // Intentar frenar más allá del límite
    $miCoche->frena(200);
    print "Intentando frenar más allá del límite: " . $miCoche->mostrarCoche() . "<br>";


    ?>
</body>
</html>