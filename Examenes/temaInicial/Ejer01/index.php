<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    require_once 'validaciones.php';

    <h1>Gestion de Contactos</h1>

    <form action="validaciones.php" method="post">

       
        <label for="nombre">Nombre</label>
        <input type="Text" name="nombre" id="nombre" required>

        <br>
        
        <label for="">Correo Electronico</label>
        <input type="text" name="" id="" required > 

        <br>

        <label for="telefono">Telefono</label>
        <input type="text"  name="telefono" id="telefono" required>

        <br>

        <input type="submit" values="Agregar contacto">

        <h1>Lista de Contactos</h1>

        <table border='1'>
            

             <td>Nombre</td>
             <td>Email</td>
             <td>Telefono</td>

             <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
           
        </table>

        
    </form>
    
</body>
</html>