<?php
require_once '../vendor/autoload.php';
use App\clases\conexionBD;

$connection = conexionBD::getConnection();

if ($connection instanceof PDO)
{
    echo 'Conexión establecida correctamente';
}
?>