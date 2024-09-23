<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ejercicio1 </title>
    </head>

    <body>
        <?php
            date_default_timezone_set('Europe/Madrid');
            
            $fechaActual=date("d-m-y");
            print"Fecha actual: " . $fechaActual . "<br/>";                  
        ?>
    </body>
</html>
