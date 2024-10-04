<?php


    namespace MiProyecto\clases;
    

class Aeropuerto
{
    private $elementosVoladores = array();

    public function __construct()
    {
        $this->elementosVoladores = [];
    }

    public function metodoInsertar($elementoVoladores)
    {
        //insertar elementos al array
        array_push($this->elementosVoladores, $elementoVoladores);
    }
    public function buscar($nombre)
    {
        $cont = 0;

        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento->getNombre == $nombre) {
                echo $elemento->mostrarInfo();
                $cont++;
            }
        }
        if ($cont == 0) {
            echo "No se encontro el vehiculo";
        }
    }

    public function listarCompania($nombre)
    {
        $cont = 0;
        foreach ($this->elementosVoladores as $elemento) {
            //comprobamos que el objeto sea tipo avion
            if ($elemento instanceof Avion) {
                if ($elemento->getCompania() == $nombre) {
                    echo $elemento->mostrarInformacion();
                    $cont++;
                }
            }
        }
        if ($cont == 0) {
            echo "No se encontraron vehiculos de la compañia";
        }
    }
    public function rotores($numRotores): void
    {
        $cont = 0;
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Helicoptero) {
                echo $elemento->mostrarInformacion();
                $cont++;
            }
        }
        if ($cont == 0) {
            echo "No se encontraron helicopteros";
        }
    }

    public function despegar($nombre, $altitudEsperada, $velocidad)
    {
        $cont = 0;
        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento->getNombre() == $nombre) {
                $elemento->acelerar($velocidad);
                echo "Acelerando " . $elemento->getNombre() . " a " . $velocidad . " km/h.<br>";
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