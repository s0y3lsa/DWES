<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php

            class circulo{
                private $radio;

                public function __construct($radioInicial){
                    $this->radio= $radioInicial;
                }

                
                /*
                public fuction setRadio($radio){          
                    $this->radio= $nuevo_radio;
                 }
                public function getRadio(){
                return $this->radio;}
                */
                 // Método mágico __set para asignar valor al atributo privado radio
                public function __set($nombre, $valor) {
                if ($nombre == 'radio') {
                $this->radio = $valor;
                }
                }
                // Método mágico __get para obtener el valor del atributo privado radio
                public function __get($nombre) {
                if ($nombre == 'radio') {
                    return $this->radio;
                    }
                }
            }
        ?>  


</body>
</html>