<?php
require_once '../vendor/autoload.php';
use App\clases\conexionBD;
use App\clases\funcionesBD;
$connection = conexionBD::getConnection();

if ($connection instanceof PDO)
{
    echo 'Conexión establecida correctamente';
}
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 
<body>
    <h1>Jugadores de la NBA</h1>
    <hr>
 
    <form method="post">
        <p>Equipos:
            <select>
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
</body>
 
</html>