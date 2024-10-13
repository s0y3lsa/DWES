<?php

if (isset($_POST['num1'], $_POST['num2'], $_POST['operacion'])) {

    $num1=(int)$_POST['num1'];
    $num2=(int)$_POST['num2'];
    $operacion=$_POST['operacion'];

    // Inicializar variable para almacenar el resultado
    $resultado=null;
    $operacionTexto="";

    // Realizar la operación seleccionada
    switch ($operacion) {
        case "suma":
            $resultado= $num1 + $num2;
            $operacionTexto="suma";
            break;
        case "resta":
            $resultado= $num1 - $num2;
            $operacionTexto="resta";
            break;
        case "producto":
            $resultado= $num1 * $num2;
            $operacionTexto="multiplicacion";
            break;
        case "cociente":
             // Verificar que no se divida por cero
             if ($num2 != 0) {
                $resultado = $num1 / $num2;
                $operacionTexto = "cociente";
            } else {
                echo "<p>No se puede dividir por cero.</p>";
                echo '<br><a href="ejercicio8.html">Volver</a>';
                exit();
            }
            break;
            default:
                echo "<p>Operación no válida.</p>";
                echo '<br><a href="ejercicio8.html">Volver</a>';
                exit();
    }
     // Mostrar el resultado
     echo "<h1>Resultado</h1>";
     echo "<p>El resultado de realizar la $operacionTexto de los números $num1 y $num2 es $resultado.</p>";
 } else {
    echo "<p>No se han recibido datos válidos.</p>";
}
      // Enlace para volver a la página inicial
      echo '<br><a href="ejercicio8.html">Volver</a>';
?>