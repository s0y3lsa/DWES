<!DOCTYPE html>

<html>


    <head>

    </head>
<body>

<?php 

    $fechaInicio='2024-09-05';
    $fehcaFin='2024-09-10';

    // Convertir las fechas a timestamp
    $diasInicio = strtotime($fechaInicio);
    $diasFin = strtotime($fechaFin);

    // Calcular la diferencia en segundos y luego convertir a días
    $diasTranscurridos = ($diasFin - $diasInicio) / 86400; // 86400 segundos en un día

    print "Número de días transcurridos: " . $diasTranscurridos;
?>



</body>

</html>