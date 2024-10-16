<?php

namespace App\public;

require_once '../vendor/autoload.php';

use app\Clases\ServicioCorreo;
use app\Clases\ProveedorMailtrap;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Utilizando el autoload de composer en PSR4 ServicioCorreo.php y ProveedorMailtrap.php
    $proveedor = new ProveedorMailtrap();
    $servicioCorreo = new ServicioCorreo($proveedor);

    if($servicioCorreo->enviarCorreo($email,$asunto,$mensaje)){
        echo 'Correo enviado existosamente. ';
    }else{
        echo 'Error al enviar el correo.';
    }

}

?>