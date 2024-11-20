<?php
namespace App\Clases;
class Categoria
{
   private $id;
   private $nombre;


    public function __construct($id,$nombre)
    {
         $this->id=$id;
         $this->nombre=$nombre;
    }

    public function __get($nombre){
     return $this->nombre;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
<form method="POST">
        <h1>Productos por categorias</h1>
        <select id="categoria" name="categoria" required>
            <option value="alimentacion" <?php echo (isset($_POST['categoria']) && $_POST['categoria'] == "alimentacion") ?  'selected' :  ' '; ?>>Alimentacion
            </option>
            <option value="electronica" <?php echo (isset($_POST['categoria']) && $_POST['categoria'] == "electronica") ? 'selected' : ' '; ?>>Electronica
            </option>
            <option value="todos" <?php echo (isset($_POST['categoria']) && $_POST['categoria'] === "todos") ? 'selected' : ' '; ?>>Todos</option>
        </select>
        <input type="submit" value="Mostrar">
    </form>
</body>
</html>