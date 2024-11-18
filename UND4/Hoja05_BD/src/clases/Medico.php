<?php
namespace App\clases;
abstract class Medico {
    protected $codigo;
    protected $nombre;
    protected $edad;
    protected $turno;

    public function __construct($codigo, $nombre,$edad, $turno) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->edad=$edad;
        $this->turno = $turno;
    }

    public function getCodgio() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTurno() {
        return $this->turno;
    }

    public function getEdad() {
        return $this->edad;
    }
    public abstract function __toString();
}
?>