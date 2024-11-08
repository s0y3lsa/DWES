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
                    $registro = funcionesBD::getEquipos();
                    foreach ($registro as $r) {
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
            $funciones = new funcionesBD();
            //mostrar nombres de los jugadores de los equipo
            $nombreEquipo = strval($_POST['nombre']);
            $jugadores = $funciones->getJugadoresEquipo($nombreEquipo);
            echo '<th>Nombre</th>';
            foreach ($jugadores as $jugador) {
                echo '<tr><td>' . $jugador['nombre'] . '</td></tr>';
            }
        ?>
    </table>
</body>

</html>