<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["numero"]) && is_numeric($_POST['numero'])) {
        //convertir el valor a entero 
        $numero = (int)$_POST['numero'];

        // Mostrar la tabla de multiplicar del 1 al 10
        echo "<h1>Tabla de multiplicar del número $numero</h1>";

        //tabla
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        for ($i = 0; $i < 10; $i++) {

            $resultado = $numero * $i;

            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }
        //cerrar tabla
        echo "</table>";
         // Mostrar un enlace para volver a la página inicial
         echo '<br><a href="ejercicio6.html">Volver</a>';
    }else{
        echo "<h1>Error: No se ha introducido un número válido.</h1>";
        echo '<br><a href="ejercicio6.html">Volver</a>';
    }
}else{
    echo "<h1>No se ha enviado ningún dato.</h1>";
    echo '<br><a href="ejercicio6.html">Volver</a>';
}
?>