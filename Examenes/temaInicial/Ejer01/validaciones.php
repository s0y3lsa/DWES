
<?php

$contactos= array(
    "Juan Perez"=>array("juan.perez@gmail.com","652678987"),
    "Maria Lopez"=>array("maria.lopez@gmail.com,",656714560)
);



function validarNombre(){

    $nombre=$_POST['nombre'];

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        if(isset($_POST['nombre'])){

            foreach($contactos as $contacto){
                if(strpos($nombre) && strlen($nombre)==8){
                    echo "Nombre valido ".htmlspecialchars($nombre);
                }else{
                    echo "Error el nombre debe de tener al menos 3 letras y no contener caracteres especiales";
                }
            }
        }
    }

}

function validaEmail(){

}

function validaTelefono(){
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        if(isset($_POST['telefono'])){
            foreach($contactos as $contacto){
                if(strelen($telefono)==9){
                    echo "El numero de telefono es valido";
                }else{
                    echo "Error:el telefono debe contener exactamente 9 digitos";
                }
            }
        }
    }
}

function listarContactos(){

   echo " <table border='1'>";
            

        echo   "<td>Nombre</td>";
        echo    "<td>Email</td>"; 
        echo     "<td>Telefono</td>";

        echo     "<tr>";
        echo      "<td></td>";
        echo      "<td></td>";
        echo     "<td></td>";
        echo     "</tr>";  

           
      echo "</table>";

}


?>
