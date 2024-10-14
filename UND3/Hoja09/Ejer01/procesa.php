<?php
        if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST["origen"]) && !empty($_POST["destino"])) {
            if(!empty($_POST['cantidad'])) {
                $cantidad = $_POST['cantidad'];
                $origen = $_POST["origen"];
                $destino = $_POST["destino"];

                $resultado = 0;

                if($origen === "euros" && $destino === "dolares") {
                    $resultado = $cantidad * 1.1;
                } elseif($origen === "dolares" && $destino === "euros") {
                    $resultado = $cantidad * 0.91;
                } else {
                    $resultado = $cantidad;
                }
                echo "<h2>Resultado de la conversiÃ³n</h2>";
                echo "Cantidad: " . $cantidad . " " . $origen . "<br>";
                echo "Convertido a: " . $destino . " es " . $resultado;
            }
        }
    ?>