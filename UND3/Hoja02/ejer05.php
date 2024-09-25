<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        

        function comprobarCapicua($numero){
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

        function redondeable($numero){
            //redondear hacia arriba 

            round($numero,PHP_ROUND_HALF_UP);
            //redondear hacia abajo 
            round ($numero,PHP_ROUND_HALF_DOWN);
        }
        function numDigitos($numero){
            $suma=0;
            while($numero!=0){
                $resto=(int)$numero%10;
                $resto=1;
                $suma=$suma+$resto;
                $numero=(int)($numero/10);
                }
        } 

        $numero=300; 

        print "Numero dado " .$numero. "<br>"
        . comprobarCapicua($numero) . "<br>".
        redondeable ($numero). "<br>". 
        numDigitos($numero);
    
    ?>
    

</body>
</html>