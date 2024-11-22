<?php


class helper
{


    // Función 1: Validar si un campo es requerido (no vacío)
    function validarRequerido($entrada): bool
    {
        return !empty($entrada);
    }
    // Función 2: Validar si un campo es numérico
     function validarNumerico($entrada)
    {

        return is_numeric($entrada);
    }


    function validarSubidaFichero($fichero)
    {
        $dir_subida = '/var/www/uploads/';
        $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

        echo '<pre>';
        if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
        }

        echo 'Más información de depuración:';
        print_r($_FILES);

        print "</pre>";
    }

   function validarFormatoImagen($formato){
        foreach ($_FILES["imágenes"]["error"] as $clave => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $nombre_tmp = $_FILES["imágenes"]["tmp_name"][$clave];
                // basename() puede evitar ataques de denegació del sistema de ficheros;
                // podría ser apropiado más validación/saneamiento del nombre de fichero
                $nombre = basename($_FILES["imágenes"]["name"][$clave]);
                move_uploaded_file($nombre_tmp, "datos/$nombre");
            }
        }
    }

   function limpiar_texto($texto) {
        // Definir las etiquetas HTML permitidas
        $etiquetas_permitidas = '<a><strong><em><h1><h2><h3><h4><h5><h6><ul><ol><li><blockquote><br><div><span><table><thead><tbody><tr><th><td>';
        // Limpiar el texto y permitir solo las etiquetas definidas
        return strip_tags($texto, $etiquetas_permitidas);
    }

    //6
     function limpiar_entrada(){
          // Primero, limpiar el texto usando la función limpiar_texto
        $entrada_limpia = limpiar_texto($entrada);
    // Eliminar cualquier otro tipo de caracteres potencialmente peligrosos
        return htmlspecialchars($entrada_limpia, ENT_QUOTES, 'UTF-8');
    }
    // Función 7: Redireccionar a una URL
    function redireccionar($url) {
        header("Location: $url");
        exit();
    }



}

?>