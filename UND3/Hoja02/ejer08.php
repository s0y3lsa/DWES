<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        function cadenas(){

            $cadena="Comer algas es realmente sano";

            //funcion cadena buscar posicion de alga
            $posicion=strpos($cadena,"alga");
            echo "La posicion de comer alga es". $posicion; 

            //funcion reemplazar palabras
            $reemplazar=str_replace("realmente","muy", $cadena);
            echo  $reemplazar;

            //Buscar palabra anacardo

            if(strpos($cadena,'anacardo')!==false){
                echo "La palabra anacardo se encuentra emña cadena";
                
            }else{
                echo "No se encuentra en la cadena";
            }
           
            //invertir 
            $invertir=strrev( $cadena);
            echo  $invertir;
            //vocales 
            $vocales=substr_count($cadena,"e");
            echo  $cadena;

        }

    ?>
</body>
</html>