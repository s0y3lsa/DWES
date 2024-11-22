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
            <select id="jugador" name="jugadorñ">
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

        <label for="nombreRemplazo">Nombre: </label>
        <input type="text" name="nombreRemplazo" id="nombreRemplazo">
        <br>
        <label for="procedenciaRemplazo">Procedencia: </label>
        <input type="text" name="procedenciaRemplazo" id="procedenciaRemplazo">
        <br>
        <label for="alturaRemplazo">Altura: </label>
        <input type="number" name="alturaRemplazo" id="alturaRemplazo" step="0.01">
        <br>
        <label for="pesoRemplazo">Peso: </label>
        <input type="number" name="pesoRemplazo" id="pesoRemplazo">
        <br>    
        <label for="posicionRemplazo">Posicion: </label>
        <select name="posicionRemplazo" id="posicionRemplazo" required>
                <option>G</option>
                <option>F</option>
                <option>F-G</option>
                
        </select>
        <br>
        <input type="submit" value="Realizar transpaso" name="transpaso" id="transpaso">
    </form>

    <?php 
          if (isset($_POST['traspaso'])) {
            // Capturamos los datos del formulario
            $nombreViejo=$_POST['jugador'];
            $nombre = $_POST['nombreRemplazo'];
            $procedencia = $_POST['procedenciaRemplazo'];
            $altura = $_POST['alturaRemplazo'];
            $peso = $_POST['pesoRemplazo'];
            $posicion = $_POST['posicionRemplazo'];
            // Llamamos a la función para modificar el jugador
            $funciones->darBajaJugador($nombreViejo,$nombre, $procedencia, $altura, $peso, $posicion);     
        }
        ?>


</body>

</html>