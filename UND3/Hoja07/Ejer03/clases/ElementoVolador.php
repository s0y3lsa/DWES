<?php



    namespace  MiProyecto\clases;
    use MiProyecto\interfaces\Volador;
    
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
    
?>