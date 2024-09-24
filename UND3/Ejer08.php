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


    function calcularFactorial($n){

            $factorial=1;

            for($i=1;$i<=$n;$i++){
                $factorial *= $i;

            }
            return $factorial;
        }
        // Ejemplo: calcular el factorial de 5
        $numero = 5;
        echo "El factorial de $numero es: " . calcularFactorial($numero);
    
    ?>

</body>
</html>