<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Fecha Actual:</h1>
    <p>
        <?php
        // Establecer la zona horaria y el idioma
        setlocale(LC_TIME, 'es_ES.UTF-8');
        date_default_timezone_set('Europe/Madrid');

        // Obtener la fecha actual en el formato deseado
        echo strftime("%A, %d de %B de %Y");
        ?>
    </p>
    
</body>
</html>
