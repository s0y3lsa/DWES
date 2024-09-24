<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function esPrimo($numero){
            $primo=1;
             // Los números menores que 2 no son primos
              if ($numero < 2) {
                return false;
            }
            

            // Comprobamos si el número tiene divisores distintos de 1 y de sí mismo
            // sqrt() para la raiz cuadrada de un numero 
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
            return false; // Si encontramos un divisor, el número no es primo
        }
    }

    return true; // Si no se encuentran divisores, el número es primo
        }
        // Ejemplo: averiguar si un número es primo
    $numero = 29;
    if (esPrimo($numero)) {
        echo "$numero es un número primo.";
    } else {
        echo "$numero no es un número primo.";
        }
    ?>
</body>
</html>