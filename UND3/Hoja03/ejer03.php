<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function calcular_letra_NIF($dni){

            //array de letras 
            $letras=['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

            //aseguramos que el DNI sea un numero 
            if(!is_numeric($dni)||strlen($dni)!=8){
                return "El DNI introducido no es válido. Debe ser un número de 8 dígitos.";
                }

            //dividimos el resto entre 23 
            $resto=$dni %23;
            //obtenemos la letra correspondiente del array
            $letra=$letras[$resto];

            //devolvemos el DNI completo con su letra
            return $dni. $letra;

            // Código auxiliar para probar la función
            function probar_calculo_nif() {
            $dni = readline("Introduce el número del DNI (sin letra): ");
    
            $nif = calcular_letra_nif($dni);

             echo "\nEl NIF completo es: " . $nif . "\n";
            }

        // Llamada para probar la función
        probar_calculo_nif();
            }

    ?>





</body>
</html>