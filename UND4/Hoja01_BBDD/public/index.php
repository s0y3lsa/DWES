<?php
require_once '../vendor/autoload.php';

use App\clases\conexionBD;
use App\clases\funcionesBD;

$connection = conexionBD::getConnection();

if ($connection instanceof PDO) {
    echo 'Conexión establecida correctamente';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <h1>Jugadores de la NBA</h1>
    <hr>
    <form method="post">
        <p>Equipos:
            <select id="nombre" name="nombre">
                <?php
                $jugadores = funcionesBD::getEquipos();
                foreach ($jugadores as $r) {
                    echo '<option>' . $r . '</option>';
                }
                ?>
            </select>
        </p>
        <input type="submit" value="Mostrar" name="Mostrar">
    </form>
    <!-- Punto 6 ! Tabla-->
    <table>
        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
            $funciones = new funcionesBD();
            //mostrar nombres de los jugadores de los equipo
            $nombreEquipo = (strval($_POST['nombre']));
            $jugadores = $funciones->getJugadoresEquipo($nombreEquipo);

            echo '<th>Nombre</th><th>Peso</th>';

            foreach ($jugadores as $jugador) {
                echo '<tr><td>' . $jugador['nombre'] . '</td><td>' . $jugador['peso'] . 'kg</td></tr>';
            }
        }
        ?>
    </table>

    <!--punto 8 !-->
    <h1>Baja y alta de jugadores</h1>
    <form method="post">
        <p>Baja del jugador:
            <select id="nombre" name="nombre">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
                //mostrar nombres de los jugadores de los equipo
                $nombreEquipo = (strval($_POST['nombre']));
                $bajaJugador = $funciones->getJugadorNombre($nombreEquipo);
                foreach ($bajaJugador as $jugador) {
                    echo '<option>' . $jugador  ['nombre']. '</option>';
                }
                }
                ?>
            </select>
        </p>

        <h4>Datos del nuevo jugador</h4>

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="procedencia">Procedencia: </label>
        <input type="text" name="procedencia" id="procedencia">
        <br>
        <label for="altura">Altura: </label>
        <input type="number" name="altura" id="altura">
        <br>
        <label for="peso">Peso: </label>
        <input type="number" name="peso" id="peso">
        <br>    
        <label for="posicion">Posicion: </label>
        <select id="posicion" required>
                <option>G</option>
                <option>F</option>
                <option>F-G</option>
                
        </select>
        <br>
        <input type="submit" value="Realizar transpaso" name="transpaso">

    </form>

</body>

</html>