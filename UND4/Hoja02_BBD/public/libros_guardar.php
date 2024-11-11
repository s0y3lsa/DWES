<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    require_once '../vendor/autoload.php';

    use App\Clases\ConexionBD;
    use App\Clases\funcionesBD;

    $connection = ConexionBD::getConnection();
    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo = $_POST['titulo'];
        $edicion = $_POST['edicion'];
        $precio = $_POST['precio'];
        $adquisicion = $_POST['adquisicion'];
        $funcionesBD::agregarLibro($titulo, $edicion, $precio, $adquisicion);
    }

    ?>
     <a href="libros.php">volver</a>

</body>

</html>