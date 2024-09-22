<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8">
    </head>
<body>

<?php

    // Crear un objeto DateTime con la fecha actual
    $fecha_actual = new DateTime();

    // Restar un número de días (por ejemplo, restar 5 días)
    $diasRestar = 5;
    $fecha_actual->modify("-$diasRestar days");

    // Obtener la fecha en el formato "día-mes-año"
    $fecha_modificada = $fecha_actual->format("d-m-Y");

    // Mostrar la fecha modificada
    echo "La fecha después de restar $dias_a_restar días es: $fecha_modificada";

?>
</body>
</html>