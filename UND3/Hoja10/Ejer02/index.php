<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>Elige un equipo</h1>

    <!-- Formulario con combobox de marcas -->
    <form method="post">

        <label for="equipo">Equipo: </label>
        <select name="equipo" id="equipo">
            <option value="todos" <?php if ($equipoSeleccionado == "todos") echo "selected"; ?>>Todos</option>
            <?php
            // Generar las opciones del combobox con las marcas
            foreach ($equipos as $equipo => $datos) {
                // Mantener seleccionada la opción elegida
                $selected = ($equipo == $equipoSeleccionado) ? "selected" : "";
                echo "<option value=\"$equipo\" $selected>$equipo</option>";
            }
            ?>
        </select>
        <br><br>

        <label>Selecciona el componente:</label>
        <input type="radio" id="entrenador" name="componente" value="entrenador" <?php if ($componenteSeleccionado == "entrenador") echo "checked"; ?>>
        <label for="entrenador">Entrenador</label>

        <input type="radio" id="jugadores" name="componente" value="jugadores" <?php if ($componenteSeleccionado == "jugadores") echo "checked"; ?>>
        <label for="jugadores">Jugadores</label>
        <br><br>

        <!--boton-->
        <input type="submit" value="Mostrar">
    </form>



    <?php

    $equipos = array(

        "Real Madrid" => array(

            "entrenador" => array("nombre" => "Zidane", "imagen" => "zidane.jpg"),

            "jugadores" => array(
                array("nombre" => "Curtois", "imagen" => "courtois.jpg"),
                array("nombre" => "Ramos", "imagen" => "ramos.jpg"),
                array("nombre" => "Hazard", "imagen" => "hazard.jpg")
            )

        ),


        "Barcelona" => array("nombre" => "Koeman", "imagen" => "koeman.jpg"),
        "jugadores" => array(

            array("nombre" => "Ter Stegen", "imagen" => "terstegen.jpg"),
            array("nombre" => "Piqué", "imagen" => "pique.jpg"),
            array("nombre" => "Griezmann", "imagen" => "griezmann.jpg")
        )

    );

    // Variables para manejar la selección del formulario
    $equipoSeleccionado = "";
    $componenteSeleccionado = "";

    //procesar el formulario ccuando se envie 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el equipo seleccionado
        $equipoSeleccionado = $_POST['equipo'];
        // Obtener el componente seleccionado (entrenador o jugadores)
        $componenteSeleccionado = $_POST['componente'];
    }

    // Función para mostrar los datos en una tabla
    function mostrarComponentes($equipo, $componente, $equipos)
    {
        echo "<h2>Componentes del equipo $equipo</h2>";
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Imagen</th></tr>";

        // Si el componente es el entrenador
        if ($componente == "entrenador") {
            $entrenador = $equipos[$equipo]["entrenador"];
            echo "<tr>";
            echo "<td>" . $entrenador["nombre"] . "</td>";
            echo "<td><img src='" . $entrenador["imagen"] . "' alt='" . $entrenador["nombre"] . "'></td>";
            echo "</tr>";
        }
        // Si el componente son los jugadores
        elseif ($componente == "jugadores") {
            foreach ($equipos[$equipo]["jugadores"] as $jugador) {
                echo "<tr>";
                echo "<td>" . $jugador["nombre"] . "</td>";
                echo "<td><img src='" . $jugador["imagen"] . "' alt='" . $jugador["nombre"] . "'></td>";
                echo "</tr>";
            }
        }

        echo "</table>";
    }

    // Mostrar los componentes seleccionados
    if ($equipoSeleccionado != "" && $componenteSeleccionado != "") {
        // Si se selecciona "Todos", mostrar los componentes de todos los equipos
        if ($equipoSeleccionado == "todos") {
            foreach ($equipos as $equipo => $datos) {
                mostrarComponentes($equipo, $componenteSeleccionado, $equipos);
            }
        } else {
            // Mostrar componentes del equipo seleccionado
            mostrarComponentes($equipoSeleccionado, $componenteSeleccionado, $equipos);
        }
    }

    ?>

</body>

</html>