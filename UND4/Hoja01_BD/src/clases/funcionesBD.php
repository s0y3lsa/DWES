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
    public static function darBajaJugador($nombreViejo,$nombre, $procedencia, $altura, $peso, $posicion){
       
        try{

         //hacemos la conexion
         $dwes = ConexionBD::getConnection();
         //iniciamos la transaccion(se me olvido)
         $dwes->beginTransaction();
         
          //preparamos la consulta
          $consulta = $dwes->prepare('update jugadores set nombre=:nombre, procedencia=:procedencia, altura=:altura, peso=:peso, posicion=:posicion where nombre=:nombreViejo');

             //asignamos los campos
             $consulta->bindParam(':nombre', $nombre);
             $consulta->bindParam(':procedencia', $procedencia);
             $consulta->bindParam(':altura', $altura);
             $consulta->bindParam(':peso', $peso);
             $consulta->bindParam(':posicion', $posicion);
             $consulta->bindParam(':nombreViejo',$nombreViejo);
             //ejercutamos la consulta
             $consulta->execute();
             //si funciona que haga un commit sino un rollback
             $dwes->commit();
             echo("Se cambio el jugador");

    }    
    catch(PDOException $e) {
        // Revertir la transacción en caso de error
        $dwes->rollBack();
        echo "Error en el traspaso: " . $e->getMessage();
    }
    }
    
}