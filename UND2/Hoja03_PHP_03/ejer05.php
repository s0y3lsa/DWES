<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ejercicio5 </title>
    </head>

    <body>
        <?php
            date_default_timezone_set('Europe/Madrid');
            $dia = 21;
            $mes = 9;
            $anio = 2024;

            $hora = 11;
            $minutos = 0;
            $segundos = 0;

            $fecha = date_create("$anio-$mes-$dia $hora:$minutos:$segundos");
            $fechaF = date_format($fecha, "d-m-Y H:i:s"); 

            $horas = 4;

            date_modify($fecha, "+$horas hours"); //strtotime()
            $fechaFinalF = date_format($fecha, "d-m-Y H:i:s");

            print"Fecha Inicial: " . $fechaF . "<br/>";
            print"Fecha con las horas sumadas " . $fechaFinalF . "<br/>";
        ?>
    </body>
</html>
