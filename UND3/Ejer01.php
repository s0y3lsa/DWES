<!DOCTYPE html>

<html>

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha Actual</title>
</head>
<body>

    
    <?php

        //Configuracion regional en español 
        setlocale(LC-TIME,'es_ES.UFT-8','es_ES','esp'); 
        
        //Obtener la fecha con el formato cadena
        
        echo strftime("%A, %d de %B de %Y");
        


    ?>

</body>

</html>
