<?php

    namespace MiProyecto\clases;
    
    class Helicoptero extends ElementoVolador {
        private $propietario;
        private $nRotor;
    
        public function __construct($nombre, $numAlas, $numMotores, $propietario, $nRotor) {
            parent::__construct($nombre, $numAlas, $numMotores);
            $this->propietario = $propietario;
            $this->nRotor = $nRotor;
        }
    
        public function getPropietario() {
            return $this->propietario;
        }
        public function getNRotor() {
            return $this->nRotor;
        }
    
        public function volar($altitud){
            //La altitud no podrá ser superior a 100
            $altitudMaxima= $this->altitud*100;
    
            if($altitud > $altitudMaxima){
                echo "Error el helicoptero no puede volar a dicha altura";
                return;
            }
        }
        public function volando(): bool
            {
                return $this->altitud > 0 ? true : false;
            }
        public function mostrarInformacion(){
            echo "Helicóptero:". $this->nombre."</br>".
            "Numero de motores: ". $this->numMotores."<br>".
            "Altitud actual: " . $this->altitud . " metros.<br/>" .
            "Velocidad actual: " . $this->velocidad . ".<br/>" .
            "Propietario: " . $this->propietario . ".<br/>" .
            "Numero de rotores: " . $this->nRotor . ".<br>";
        }
    
        }



?>