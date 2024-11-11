<?php
require_once '../vendor/autoload.php';
use App\clases\conexionBD;
use App\clases\funcionesBD;
use App\clases\libros_guardar;

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
    <title>Document</title>
</head>
<body>
    
    <form  action="libros_guardar.php" method="post">

        <h1>Inserte los datos del libro</h1>

            <label for="titulo">Titulo:*</label>
            <input type="text" name="titulo" id="titulo">
            <br>
            <label for="anio">Año de edicion:*</label>
            <input type="number" name="anio" id="anio">
            <br>
            <label for="precio">Precio:*</label>
            <input type="number" name="" id="">
            <br>
            <label for="fecha">Fecha de adquisicón:*</label>
            <input type="date" name="fecha" id="fecha">
            <br>
            <input type="submit" value="Guardar datos del libro">

    </form>
    <a href="libros.php">Mostrar los libros guardados</a>
</body>
</html>