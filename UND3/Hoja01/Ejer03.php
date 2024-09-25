<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

    
    <?php
        //funcion que verifica si un numero es capicua 
        function esCapicua($numero){
            
            // Verificamos si es un número de tres cifras
            if ($numero >= 100 && $numero <= 999) {
            // Convertimos el número a cadena
            $strNumero = (string)$numero;
            
              // Comparamos el primer carácter con el último
            if ($strNumero[0] == $strNumero[2]) {
                return "$numero es un número capicúa.";
            } else {
            return "$numero no es un número capicúa.";
            }
        } else {
        return "El número debe ser de tres cifras.";
         }   
        }
        // Prueba con un número
        echo esCapicua(121);

    ?>

</body>

</html>