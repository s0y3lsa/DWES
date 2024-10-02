<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

            // Incluimos la clase Circulo 
            require_once 'Circulo.php';

            // crear un objeto clase 
            $miCirculo= new Circulo(5);

            //mostrar el valor del radio usando el metodo magico 
            print "El radio inicial es: ". $miCirculo->radio ."<br>;" 

            // cambiar el valor del radio metodo magico __set
            $miCirculo->radio=20;

            // Mostrar el nuevo valor del radio
            echo "El nuevo radio es: " . $miCirculo->radio . "<br>";

        ?>
</body>
</html>