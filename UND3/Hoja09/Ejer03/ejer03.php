<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Buscador peliculas</h1>
    <form method="post">
        <label for="busqueda">Buscador </label>
        <input type="text" name="busqueda" id="busqueda">

        <input type="submit" value="busqueda">
    </form>

    <?php
    


    // Array con las rutas de las imágenes correspondientes a las películas
    $peliculas = [
        "joker.jpg" => "imagenes/joker.jpg",
        "it.jpg"=> "imagenes/it.jpg",
        "caballeroOscuro.jpg",
        "forrest_gump.jpg",
        "matrix.jpg",
        "gladiador.jpg",
        "titanic.jpg",
        "el_senor_de_los_anillos.jpg",
        "star_wars.jpg",
        "jurassic_park.jpg"
    ];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST['busqueda'])) {
            $busqueda = strtolower(trim($_POST['busqueda']));
            $resultados = [];

            foreach ($peliculas as $titulo => $imagenes) {
                if (strpos($titulo, $busqueda) !== false) {
                    $resultados[] = [
                        'nombre' => $titulo,
                        'imagen' => $imagenes
                    ];
                }
            }

            echo "<h2>Resultados</h2>";
            foreach($resultados as $resultado) {
                echo "<img src='" . $resultado['imagen'] . "' alt='" . $resultado['nombre'] . "' width='200' height='300'>";
                echo "<p>" . $resultado['nombre'] . "</p>";
            }
            
            

        }
    }

    ?>

</body>

</html>