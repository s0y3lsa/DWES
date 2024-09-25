<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        //Simplemente se multiplica la tasa de interés por el capital
        // Interes; Capital x Tasa x Plaza
        //Capital -> dinero 
        //Redito-> porcentaje 
        //Tiempo -> años

        function interesSimple($Capital,$Redito,$Tiempo){
            return $Capital*$Redito*$Tiempo;
        }

        function  interesCompuesto($Capital,$Redito,$Tiempo){
            return $Capital*$Redito*$Tiempo/360;
        }

        print  "El interes simple es ".interesSimple(100,0.02,4). "<br>";
        print "El interes compuesto es ".interesCompuesto(300,0.03,3);
        


       


    ?>


</body>
</html>