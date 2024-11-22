<?php
// Incluir el archivo de funciones helper.php
include 'helper.php';

//App/helper.php


// Comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Validar que todos los datos sean obligatorios
    $nombre = isset($_POST['nombre']) ? limpiar_entrada($_POST['nombre']) : '';
    $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
    $descripcion = isset($_POST['descripcion']) ? limpiar_entrada($_POST['descripcion']) : '';
    $imagen = isset($_FILES['imagen']) ? $_FILES['imagen'] : null;

    // Si alguno de los campos está vacío
    if (empty($nombre) || empty($precio) || empty($descripcion) || !$imagen) {
        echo "Por favor, rellena todos los datos";
        exit();
    }

    // 2. Validar que el precio es numérico
    if (!validar_numerico($precio)) {
        echo "Por favor, introduce un precio válido";
        exit();
    }
    
}



?>