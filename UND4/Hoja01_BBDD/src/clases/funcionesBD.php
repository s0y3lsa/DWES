<?php
namespace App\clases;
use PDO;
use PDOException;
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

    public static function getJugadoresEquipo($equipo){
        try {
            $dwes = ConexionBD::getConnection();
            $resultado = $dwes->query('SELECT nombre,peso FROM jugadores where nombre_equipo='.'"'.$equipo.'"');
            // fetch_ASSOC devuelve un array 
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener a todos los jugadores: " . $e->getMessage();
            return [];
        }
    }

}
?>