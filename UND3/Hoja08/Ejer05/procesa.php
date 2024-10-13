<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el campo 'numero' está definido y es numérico
    if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
        $numero = (int)$_POST['numero']; // Convertir el valor a un entero

        // Comprobar si el número es par
        if ($numero % 2 == 0) {
            echo "<h1>El número $numero es par.</h1>";
        } else {
            echo "<h1>El número $numero es impar.</h1>";
        }
        // Mostrar un enlace para volver a la página inicial
        echo '<br><a href="erjercicio05.html">Volver</a>';
    } else {
        echo "<h1>Error: No se ha introducido un número válido.</h1>";
        echo '<br><a href="ejercicio05.html">Volver</a>';
    }
} else {
    echo "<h1>No se ha enviado ningún dato.</h1>";
    echo '<br><a href="ejercicio05.html">Volver</a>';
}
?>