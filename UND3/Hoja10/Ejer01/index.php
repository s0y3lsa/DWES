<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Definir el array asociativo con marcas y sus modelos
    $coches = array(
        "Toyota" => array("Corolla", "Yaris", "RAV4"),
        "Ford" => array("Fiesta", "Focus", "Mustang"),
        "BMW" => array("Serie 3", "Serie 5", "X5")
    );

    // Verificar si se ha enviado el formulario
    $marcaSeleccionada = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la marca seleccionada
        $marcaSeleccionada = $_POST['marca'];
        // Comprobar si hay modelos enviados para evitar perder datos
        if (isset($_POST['modelos'])) {
            $coches[$marcaSeleccionada] = $_POST['modelos'];
        }
    }
    ?>
    <h1>Busca tu coche</h1>

    <!-- Formulario con combobox de marcas -->
    <form method="post">

        <label for="marca">Marca: </label>
        <select name="marca" id="marca">

            <?php
            // Generar las opciones del combobox con las marcas
            foreach ($coches as $marca => $modelos) {
                // Mantener seleccionada la opción elegida
                $selected = ($marca == $marcaSeleccionada) ? "selected" : "";
                echo "<option value=\"$marca\" $selected>$marca</option>";
            }
            ?>
        </select>
        <!--boton-->
        <input type="submit" value="Mostrar">
    </form>

    <?php
    // Si hay una marca seleccionada, mostrar los modelos en una tabla con campos de texto
    if ($marcaSeleccionada != "" && isset($coches[$marcaSeleccionada])) {
        echo "<h2>Modelos de $marcaSeleccionada</h2>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='marca' value='$marcaSeleccionada'>"; // Para mantener la marca seleccionada
        echo "<table border='1'>";
        echo "<tr><th>Modelo</th></tr>";
        // Mostrar cada modelo en un campo de texto
        foreach ($coches[$marcaSeleccionada] as $indice => $modelo) {
            echo "<tr>";
            echo "<td><input type='text' name='modelos[]' value='$modelo'></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<button type='submit'>Actualizar</button>";
        echo "</form>";
    }
    ?>


</body>

</html>