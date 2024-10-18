

<?php

function getConexion(){

    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); 
    $dwes = new PDO('mysql:host=localhost;dbname=dwes_01_nba', 'root', 'root', $opciones);

    try{
        $connection= new PDO(
           dsn: 'mysql:host=localhost;dbname=dwes_01_nba;charset=utf8mb4',
           username: 'root',
           password:'root',
        );
        echo 'Conexión establecida correctamente';
    }catch (PDOException $e){
       echo match($e->getCode()){
           1049 => 'Base de datos no encontrada',
           1045 => 'Acceso denegado',
           2002 => 'Conexión rechazada',
           default => 'Error desconocido',
       };
   }


}



?>