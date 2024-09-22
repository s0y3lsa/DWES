<!DOCTYPE html>

<html>
    <head>
        <meta charset="UFT-8">
    </head>
    <body>

    <?php
        $temporal="juan";
        print "El tipo de la variable $temporal es: " . gettype($temporal) . "<br>";


        $temporal=3.14;
        print "El tipo de la variable $temporal es: " . gettype($temporal) . "<br>";
        $temporal = false;

        $temporal = 3;
        print "El tipo de la variable $temporal es: " . gettype($temporal) . "<br>";

        $temporal = null;
        print "El tipo de la variable $temporal es: " . gettype($temporal) . "<br>";

    ?>
    </body>
</html>