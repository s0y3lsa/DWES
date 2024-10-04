<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    interface Volador{
        public function acelerar($velocidad);       
    }

    abstract class elementoVolador implements Volador{
        protected string $nombre;
        protected int $numAlas;
        protected int $numMotores;
        protected float $altitud;
        protected int $velocidad;

        public function __construct(string $nombre, int $numAlas, int $numMotores,$altitud,$velocidad){
            $this->nombre = $nombre;
            $this->numAlas = $numAlas;
            $this->numMotores = $numMotores;
            $this->altitud = 0;
            $this->velocidad=0; 

        }
        // Getters y Setters
    public function getNombre():string {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNumAlas() {
        return $this->numAlas;
    }

    public function setNumAlas($numAlas) {
        $this->numAlas = $numAlas;
    }

    public function getNumMotores() {
        return $this->numMotores;
    }
    

    public function setNumMotores($numMotores) {
        $this->numMotores = $numMotores;
    }

    public function getAltitud() {
        return $this->altitud;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    //Método volando: que devuelve true o false si altitud es mayor que 0.
    public function volando() {
        if($this->altitud >= 0){
            return true;
        }else{
            return false;
        }
    }
    // Implementación de acelerar (de la interfaz Volador)
    public function acelerar($velocidad) {
        $this->velocidad = $velocidad;
    }
    
    public abstract function volar(int $altitud);
    public abstract function mostrarInformacion();

    }
    class Avion extends elementoVolador{
        private string $companiaAerea;
        private DateTime $fechaAlta;
        private int $altitudMaxima;
        public function __construct(string $nombre, int $numAlas, int $numMotores, int $altitud, string $companiaAerea, int $velocidad, DateTime $fechaAlta, int $altitudMaxima)
        {
            parent::__construct($nombre, $numAlas, $numMotores, $altitud, $velocidad);
            $this->fechaAlta = $fechaAlta;
            $this->altitudMaxima = $altitudMaxima;
            $this->companiaAerea = $companiaAerea;
        }

        

        public function volar(int $altitudDeseada): void
        {
            if ($altitudDeseada > 0 && $altitudDeseada <= $this->altitudMaxima) {
                if ($this->getVelocidad() > 150) {
                    while ($this->altitud < $altitudDeseada) {
                        $this->altitud += 100;
                        if ($this->altitud > $altitudDeseada) {
                            $this->altitud = $altitudDeseada; // Para evitar superar la altitud objetivo
                        }
                        echo "Altitud actual: " . $this->altitud . " metros<br>";
                    }

                    echo "Avión ha alcanzado la altitud de " . $this->altitud . " metros.<br>";
                } else {
                    echo "No se puede volar";
                }
            } else {
                echo "No se puede volar";
            }
        }
            public function volando(): bool
        {
            return $this->altitud > 0 ? true : false;
        }


        public function getCompania(): string
        {
            return $this->companiaAerea;
        }

        public function mostrarInformacion(): void
        {
            echo "Nombre: " . $this->nombre. "<br/>" .
                "Número de alas: " . $this->numAlas . ".<br/>" .
                "Número de motores: " . $this->numMotores . ".<br/>" .
                "Altitud actual: " . $this->altitud . " metros.<br/>" .
                "Velocidad actual: " . $this->velocidad . " km/h.<br/>" .
                "Compañía aérea: " . $this->companiaAerea . ".<br/>" .
                "Fecha de alta: " . $this->fechaAlta->format('Y-m-d') . ".<br/>" .
                "Altitud máxima permitida: " . $this->altitudMaxima . " metros.<br>";
        }
    }
        
    // Clase Helicoptero que hereda de ElementoVolador
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
    class Aeropuerto  {
        private $elementosVoladores = array();

        public function __construct() {
            $this->elementosVoladores = [];
        }

        public function metodoInsertar($elementoVoladores){
            //insertar elementos al array
            array_push($this->elementosVoladores, $elementoVoladores);
        }
        public function buscar($nombre){
            $cont=0;

            foreach($this->elementosVoladores as $elemento){
                if($elemento->getNombre == $nombre){
                    echo $elemento->mostrarInfo();
                    $cont++;
                }
            }
            if($cont == 0){
                echo "No se encontro el vehiculo";
        }
    }

    public function listarCompania($nombre){
        $cont= 0;
        foreach($this->elementosVoladores as $elemento){
            //comprobamos que el objeto sea tipo avion
            if($elemento instanceof Avion){
                if($elemento->getCompania() == $nombre){
                    echo $elemento->mostrarInformacion();
                    $cont++;
            }
        }
    }
    if($cont == 0){
        echo "No se encontraron vehiculos de la compañia";
    }
}
     public function rotores($numRotores):void{
        $cont= 0;
        foreach($this->elementosVoladores as $elemento){
            if($elemento instanceof Helicoptero){
                echo $elemento->mostrarInformacion();
                $cont++;
        }
     }
     if($cont==0){
        echo "No se encontraron helicopteros";
     }
    }

    public function despegar($nombre, $altitudEsperada, $velocidad){
        $cont= 0;
        foreach($this->elementosVoladores as $elemento){
        if($elemento->getNombre() == $nombre){
            $elemento->acelerar($velocidad);
            Echo "Acelerando " . $elemento->getNombre() . " a " . $velocidad . " km/h.<br>";
            // Hacer que el objeto vuele a la altitud deseada
            $elemento->volar($altitudEsperada);

            // Devolver el objeto después de haber despegado
            return $elemento;
            
        }
        // Si no se encontró el elemento, se devuelve null
        echo "No se encontró el vehículo con nombre: " . $nombre . ".<br>";
        return null;
    }
    }
    }

    ?>
</body>
</html>