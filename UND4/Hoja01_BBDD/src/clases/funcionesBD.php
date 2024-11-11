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

    public static function getJugadoresEquipo($equipo)
    {
        try {
            $dwes = ConexionBD::getConnection();
            $resultado = $dwes->query('SELECT nombre,peso FROM jugadores where nombre_equipo=' . '"' . $equipo . '"');
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo "Error al obtener a todos los jugadores: " . $e->getMessage();
            return [];
        }
    }

    // para la baja del jugador
    public static function getJugadorNombre($equipo)
    {
        try {
            $dwes = ConexionBD::getConnection();
            $resultado = $dwes->query('SELECT nombre FROM jugadores where nombre_equipo=' . '"' . $equipo . '"');
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo "Error al obtener a todos los jugadores: " . $e->getMessage();
            return [];
        }
    }

    //metodo de baja
    public static function darBajaJugador(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['realizar_traspaso'])) {
            $equipo_id = intval($_POST['equipo']);
            $jugador_baja_id = intval($_POST['jugador_baja']);
            $nombre_nuevo = $_POST['nombre'];
            $procedencia_nuevo = $_POST['procedencia'];
            $altura_nuevo = floatval($_POST['altura']);
            $peso_nuevo = floatval($_POST['peso']);
            $posicion_nuevo = $_POST['posicion'];
        
            try {
                // Iniciar transacción
                $dwes = ConexionBD::getConnection();
                $dwes->beginTransaction();
        
                // Eliminar estadísticas del jugador que será dado de baja
                $stmt = $dwes->prepare("DELETE FROM estadisticas WHERE jugador= :jugador_id");
                $stmt->execute(['jugador_id' => $jugador_baja_id]);
        
                // Dar de baja al jugador
                $stmt = $dwes->prepare("DELETE FROM jugadores WHERE codigo = :jugador_id");
                $stmt->execute(['jugador_id' => $jugador_baja_id]);
        
                // Añadir el nuevo jugador
                $stmt = $dwes->prepare("INSERT INTO jugadores (nombre, procedencia, altura, peso, posicion, nombre_equipo) VALUES (:nombre, :procedencia, :altura, :peso, :posicion, :nombre_equipo)");
                $stmt->execute([
                    'nombre' => $nombre_nuevo,
                    'procedencia' => $procedencia_nuevo,
                    'altura' => $altura_nuevo,
                    'peso' => $peso_nuevo,
                    'posicion' => $posicion_nuevo,
                    'nombre_equipo' => $equipo_id
                ]);
    }    
    catch(PDOException $e) {
        // Revertir la transacción en caso de error
        $dwes->rollBack();
        echo "Error en el traspaso: " . $e->getMessage();
    }
    }
    }
}