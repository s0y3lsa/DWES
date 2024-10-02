<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Coche {
            //Atributos privados

            private $matricula;
            private $velocidad;

            //constructor para inicialozar la matricula y la velocidad
            public function __construct($matriculaInicial, $velocidadInicial) {
                $this->matricula = $matriculaInicial;   
                $this->velocidad = $velocidadInicial;

            }
            //metodo para incrementar la velocidad
            public function acelera($incremento) {
                $this->velocidad += $incremento;
                if($this->velocidad>120){
                    $this->velocidad = 120;
                }
            }
            //metodo para disminuir la velocidad
            public function frena($drecementa){
                $this->velocidad -=$drecementa;
                if($this->velocidad<0){
                    $this->velocidad=0;

                }
            }
            //metodo para mostrar la matricula y la velocidad
            public function mostrarCoche(){
                return "Matricula: ". $this->matricula. ", Valocidad: ".$this->velocidad. "km/h";
            }
        }
    ?>
    
</body>
</html>