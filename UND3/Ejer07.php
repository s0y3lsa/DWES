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


        function generarSerie($num){

            for($i=1;$i<=$num;$i++){

                $denominador=pow(2,$i);
                echo "$i/$denominador\n";

            }
        }

        generarSerie(10);
    ?>


</body>
</html>