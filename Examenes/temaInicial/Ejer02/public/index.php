
<?php
namespace App\clases;
use App\clases\Bombilla;
use App\clases\Coche;


$miCoche= new Coche();
$miBombila= new Bombilla(500);


function enciende_algo(){
    $miCoche->encender();
    
}


echo enciende_algo();
echo $miBombila->encender();
echo $miCoche->apagar();
echo $miBombila->apagar();




?>