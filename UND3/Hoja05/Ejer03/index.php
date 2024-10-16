<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    

    //incluir las clases 
    require_once 'clases.php';

    //crear array para almecenar los objetos de medicos
    $medicos=[];

    //crear tres obejtos de clase familia

    $medicoFamilia1=new familia("Juan",45,"mañana",50);
    $medicoFamilia2=new familia("Elsa",20,"tarde",30);
    $medicoFamilia3=new familia("Lucas",55,"mañana",40);

    // Crear tres objetos de la clase Urgencia
    $medicoUrgencia1 = new urgencia("Dr. Ruiz", 65, "tarde", "Unidad de Cuidados Intensivos");
    $medicoUrgencia2 = new urgencia("Dra. Fernández", 62, "mañana", "Unidad de Emergencias");
    $medicoUrgencia3 = new urgencia("Dr. Martínez", 61, "tarde", "Unidad de Trauma");

    //añadir los objetos al array 
    $medicos[]=$medicoFamilia1;
    $medicos[]=$medicoFamilia2;
    $medicos[]=$medicoFamilia3;
    $medicos[]=$medicoUrgencia1;
    $medicos[]=$medicoUrgencia2;
    $medicos[]=$medicoUrgencia3;

    //mostrar todos los datos 
    print "<h2> Datos de los medicos de familia y de urgencia</h2>";
    foreach ($medicos as $medico) {
        print "<p>". $medico->mostrarDatos()."</p>";
    }

    // Mostrar el número de médicos de urgencias de turno de tarde mayores de 60 años
    $medicosUrgenciaTardeMas60 = 0;
    foreach ($medicos as $medico) {
        if ($medico instanceof Urgencia && $medico->esTurnoTarde()) {
            $medicosUrgenciaTardeMas60++;
        }
    }
    echo "<h2>Número de médicos de urgencias de turno de tarde con más de 60 años: $medicosUrgenciaTardeMas60</h2>";


    // Mostrar los datos de los médicos de familia que tienen asignados un número igual o superior a 40 pacientes
    echo "<h2>Médicos de familia con 40 o más pacientes</h2>";
    foreach ($medicos as $medico) {
        //instance of para comprobar que es del mismo objeto familia
        if ($medico instanceof Familia && $medico->getNumPacientes() >= 40) {
            echo "<p>" . $medico->mostrarDatos() . "</p>";
    }
    }
    ?>
</body>
</html>