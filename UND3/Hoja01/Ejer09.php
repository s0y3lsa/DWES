<!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        function precioBillete($numDias,$distancia){
            $precioPorKm = 2.5; // Precio por kilómetro
            $precioTotal = $distancia * $precioPorKm * 2; // Billete de ida y vuelta

            if($numDias>7 && $distancia>=800){
                
                $precioTotal *= 0.7; // Aplicar el 30% de descuento

            }
            return $precioTotal;
        }

        // Ejemplo de uso
        $distancia = 900; // Distancia en km
        $diasEstancia = 10; // Número de días de estancia

        $precioBillete = precioBillete($distancia, $diasEstancia);
        echo "El precio del billete de ida y vuelta es: €" . number_format($precioBillete, 2);
    ?>





</body>
</html>