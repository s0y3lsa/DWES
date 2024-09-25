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

                    //Capicua generico de forma matematica
                $numero=4774;
                $inverso=0;
                $aux=$numero;
            while($aux!=0){
            $resto=$aux%10;
            $inverso=$inverso*10+$resto;
            $aux=(int)($aux/10);
    }
        if($numero==$inverso)
           echo "El numero $numero es capicúa<br />";
        else
            echo "El numero $numero NO es capicúa<br />";
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
