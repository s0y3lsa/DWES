<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si ambos números han sido enviados
    if (isset($_POST["numero1"]) && $_POST["numero13"]) {


        $min = min($num1, $num2);
        $max = max($num1, $num2);

        echo "<h1>Pares de números:</h1>";
        echo "<ul>";


        // Generar los pares
        for ($i = $min; $i <= $max; $i++) {
            echo "<li>($i, " . ($max - ($i - $min)) . ")</li>";
        }
    } else {
        echo "<p>No se han recibido números válidos.</p>";
    }
    // Enlace para volver a la página inicial
    echo '<br><a href="ejercicio7.html">Volver</a>';
}
