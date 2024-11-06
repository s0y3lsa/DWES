<?php
namespace App\clases;

use PDO;
use PDOExceptionm;
final class funcionesBD
{
    public static function getEquipos(): array
    {
        // Instancia de la conexión (asumiendo que `conexionBD` y su método `getConnection()` están definidos)
        $dwes = conexionBD::getConnection();
        // Consulta a la base de datos
        $consulta = $dwes->query("SELECT nombre FROM equipos");
        $resultado = [];
        // Recorrer resultados
        //array asociativo
        while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $resultado[] = $registro['nombre'];
           
        }
        
        return $resultado;
    }
}
?>