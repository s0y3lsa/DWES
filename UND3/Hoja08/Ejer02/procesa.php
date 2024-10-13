<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Verificar si las variables están definidas usando isset()
        if (isset($_POST['nombre']) && isset($_POST['modulo'])) {

            //Datos enviados por POST
            $nombre = $_POST['nombre'];
            $modulo = $_POST['modulo'];

            echo "<h1>Datos recibidos mediante POST</h1>";
            echo "Nombre del alumno: " . htmlspecialchars($nombre) . "<br>";
            echo "Modulo seleccionado: " . htmlspecialchars($modulo) . "<br>";
        } else {
            echo "Faltan datos en el formulario POST.";
        }
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Verificar si las variables están definidas usando isset()
        if (isset($_GET['nombre']) && isset($_GET['modulo'])) {
            $nombre = $_GET['nombre'];
            $modulo = $_GET['modulo'];

            echo "<h1>Datos recibidos mediante GET</h1>";
            echo "Nombre del alumno: " . htmlspecialchars($nombre) . "<br>";
            echo "Módulo seleccionado: " . htmlspecialchars($modulo) . "<br>";
        } else {
            echo "Faltan datos en el formulario GET.";
        }
    }
    ?>

</body>

</html>