<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    abstract class  Medico
    {
        protected string $nombre;
        protected int $edad;
        protected string $turno;

        public function __construct(string $nombre, int $edad, string $turno)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->turno = $turno;
        }

        // Método abstracto para mostrar los datos
        abstract public function mostrarDatos();

        // Método para obtener el turno del médico
        public function getTurno()
        {
            return $this->turno;
        }

        // Método para obtener la edad del médico
        public function getEdad()
        {
            return $this->edad;
        }
    }
    class familia extends Medico
    {
        protected $num_pacientes;
        public function __construct(string $nombre, int $edad, string $turno,int $num_pacientes)
        {
            parent::__construct($nombre, $edad, $turno);
            $this->num_pacientes = $num_pacientes;
        }

        public function mostrarDatos()
        {
            return "
            <p>Medico de familia </p>
            <p>Nombre: $this->nombre </p>
            <p>Edad: $this->edad</p>
            <p>Turno: $this->turno</p>
            <p>Número de Pacientes: $this->num_pacientes</p>
            ";
        }

        public function getNumPacientes()
        {
            return $this->num_pacientes;
        }
    }
    class urgencia extends Medico
    {
        private int $unidad;
        public function __construct(string $nombre, int $edad, string $turno,int $unidad){
            parent::__construct($nombre, $edad, $turno);
            $this->unidad = $unidad;
        }
        public function mostrarDatos()
        {
            return "
            <p>Medico de familia </p>
            <p>Nombre: $this->nombre </p>
            <p>Edad: $this->edad</p>
            <p>Turno: $this->turno</p>
            <p>Unidad: $this->unidad</p>
            ";
        }
        // Getter para obtener la edad del médico
        public function getEdad() {
            return $this->edad;
        }

        // Getter para obtener el turno del médico
        public function getTurno(){
            return $this->turno;
        }
        // Método para comprobar si el médico es de turno tarde y tiene más de 60 años
        public function esTurnoTarde(){
            return $this->turno==="tarde"&& $this->edad>60;
        }
    }
    ?>
</body>

</html>