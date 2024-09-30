<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        // Función para cargar un array con 20 números aleatorios
        function cargarArray($tamaño) {
        $array = [];
        for ($i = 0; $i < $tamaño; $i++) {
            $array[] = rand(1, 100);
        }
        return $array;
        }

        function ordenarArray($array){
            //funcion para ordenar el array
            sort($array);
            return $array; 
        }

        function mezclarArray($array1,$array2){
            $mezcla=[];
            
        }

        //main
        $tamañoArray=20;
        
        // Cargar y ordenar el primer array
        $array1=cargarArray($tamañoArray);
        $array1Ordenardo=ordenarArray($array1);

        print "Array 1 Ordenado: " . implode(", ", $array1Ordenado) . "\n";

    ?>


</body>
</html>