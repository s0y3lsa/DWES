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
        // Recorremos todos los números de 100 a 999
        for ($i = 100; $i <= 999; $i++) {
            // Convertimos el número a cadena
            $strNumero = (string)$i;
            
            // Extraemos los dígitos
            $d1 = $strNumero[0];
            $d2 = $strNumero[1];
            $d3 = $strNumero[2];
            
            // Calculamos la suma y el producto de los dígitos
            $suma = $d1 + $d2 + $d3;
            $producto = $d1 * $d2 * $d3;
            
            // Verificamos si la suma es igual al producto
            if ($suma == $producto) {
                echo $i . "\n";
            }
    ?>

</body>
</html>

