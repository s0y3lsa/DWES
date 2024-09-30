<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php


        
    function verbosRegulares() {

        $verbos = array("hablar", "comer", "vivir"); // Corregido "vivr" a "vivir"
        $randVerbos = rand(0, 2); // Cambiado para que sea un índice de array
        
        $palabra = $verbos[$randVerbos]; // Obtener el verbo según el índice aleatorio

        switch ($palabra) {
            case "hablar": return "hablo";
            case "comer":  return "como";
            case "vivir": return "vivo";
        }
    }

    echo "El presente indicativo del verbo " . verbosRegulares(); 
    ?>

</body>
</html>