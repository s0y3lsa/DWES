<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

    <?php

        $nombre="Juan";

        print "Informacion de la variable 'nombre:' <br>";
        var_dump($nombre);

        //mostrar contenido
        print "<br>Contenido de la variable: $nombre<br>";

        $nombre=null;

        print "<br>Despues de asignarle un valor nulo:<br>";
        var_dump($nombre);
    ?>

    </body>
</html>