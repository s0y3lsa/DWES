<?php
namespace App\clases;
use App\clases\Medico;


class familia extends Medico {
    private $numPacientes;

    public function __construct($codigo, $nombre,$edad, $turno, $numPacientes) {
        parent::__construct($codigo, $nombre, $edad,$turno);
        $this->numPacientes = $numPacientes;
    }

    public function __toString() {
        return "Codigo: $this->codgio, Nombre: $this->nombre, Turno: $this->turno, Número de Pacientes: $this->numPacientes";
    }
}
?>