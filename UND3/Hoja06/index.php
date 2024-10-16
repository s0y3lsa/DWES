<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //añadir la clase 
   
    include("clases.php");
    $aeropuerto = new avion1();

      // 2.Crear tres aviones
      $avion1 = new Avion("Boeing 747", 2, 4, 0, "Iberia", 300, new DateTime("2020-05-20"), 13000);
      $avion2 = new Avion("Airbus A320", 2, 2, 0, "Vueling", 280, new DateTime("2018-11-10"), 12000);
      $avion3 = new Avion("Cessna 172", 1, 1, 0, "AirEuropa", 180, new DateTime("2019-03-15"), 4000);


?>
</body>
</html>