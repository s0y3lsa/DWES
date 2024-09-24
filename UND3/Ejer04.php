<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio04</title>
</head>
<body>
    
    <?php

        function esCapicua(){

            $capicuas = [];

            for($i=100;$i<=999;$i++){
                // Convertimos el número a cadena
                $strNumero = (string)$i;

                 // Comparamos el primer carácter con el último
                 if ($strNumero[0] == $strNumero[2]) {
                $capicuas[] = $i;
                }
            }
            return $capicuas;
        }
        // Generar y mostrar los números capicúa
    $numerosCapicua = esCapicua();
    echo "Los números capicúa entre 100 y 999 son:\n";
    echo implode(", ", $numerosCapicua);
    ?>
    
</body>
</html>