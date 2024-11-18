<?php
require '../../vendor/autoload.php';
use App\Clases\FuncionBD;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
</head>

<body>
    <h1>Gestion de plazas</h1>
    <hr>
    <form method="post">
        <?php
        $plazas = FuncionBD::plazas();
        foreach ($plazas as $plaza) {
            echo '<label for="plaza' . $plaza['numero'] . '">Plaza ' . $plaza['numero'] . ': 
                <input id="plaza' . $plaza['numero'] . '" name="plaza[' . $plaza['numero'] . ']" type="number" value="' . $plaza['precio'] . '" step="0.01">€</label><br>';
        }
        ?>
        <input type="submit" value="Actualizar" id="actualizar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $plazas=$_POST['plaza'];
        FuncionBD::actualizarPlazas($plazas);
    }
    ?>
    <a href="../index.html">Pagina de inicio</a>
</body>

</html>