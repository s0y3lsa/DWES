<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>Buscador de peliculas </h1>
    <form method="post">
        <label for="busqueda">Buscador </label>
        <input type="text" name="busqueda" id="busqueda">

        <input type="submit" value="busqueda">
    </form>

    <?php
    $peliculas = [
        "tick tick boom",
        "spider-man into the spiderverse",
        "la princesa mononoke",
        "el castillo ambulante",
        "barbie",
        "your name",
        "klaus",
        "coco",
        "animales fantasticos y donde encontrarlos"
    ];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST['busqueda'])) {
            $busqueda = strtolower(trim($_POST['busqueda']));
            $resultados = [];

            foreach ($peliculas as $pelicula) {
                if (strpos($pelicula, $busqueda) !== false) {
                    $resultados[] = $pelicula;
                }
            }

            if(!empty($resultados)) {
                echo "<h2>Resultados</h2>";
                foreach($resultados as $resultado) {
                    echo $resultado . "<br>";
                }
            } else {
                echo "Sin resultados";
            }

        }
    }
    ?>
</body>

</html>