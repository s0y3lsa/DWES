<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    class Empleado
    {
        public float $sueldo;
        public string $nombre;



        //constructor 
        public function __construct($nombre, $sueldo)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        public function getSueldo()
        {
            return $this->sueldo;
        }

        public function getNom()
        {
            return $this->nombre;
        }
    }

    //Subclase encargado 
    
    class Encargado extends Empleado
    {
        public function __construct($nombre, $sueldo)
        {
            parent::__construct($nombre, $sueldo);
        }
        public function get_sueldo(): mixed
        {
            return "El sueldo de " . $this->nombre . " es " . $this->sueldo * 1.15;
        }
        public function getNom()
        {
            return $this->nombre;
        }

    }


    //main 
    
    //Clase 
    $Encargado = new Encargado('Juan', 300);

    print $Encargado->get_sueldo();


    ?>



</body>

</html>