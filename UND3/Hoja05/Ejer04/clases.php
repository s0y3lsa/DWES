<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Producto {
            protected $codigo;
            protected $precio;
            protected $nombre;
        
            public function __construct($codigo, $precio, $nombre) {
                $this->codigo = $codigo;
                $this->precio = $precio;
                $this->nombre = $nombre;
            }
        
            // Getters
            public function getCodigo() {
                return $this->codigo;
            }
        
            public function getPrecio() {
                return $this->precio;
            }
        
            public function getNombre() {
                return $this->nombre;
            }
        
            // Método mostrar (sobreescrito por las subclases)
            public function mostrar() {
                return "Producto: $this->nombre, Código: $this->codigo, Precio: $this->precio";
            }
        }
        class alimentacion extends Producto{
            

            private $anioCaducidad;
            private $mes;

            public function __construct($codigo, $precio, $nombre,$anioCaducidad,$mes){
                parent::__construct($codigo, $precio, $nombre);
                $this->anioCaducidad=$anioCaducidad;
                $this->mes=$mes;
                
            }

            public function getaioCaducidad() {
                return $this->anioCaducidad;
            }
            public function getMes(){
                return $this->mes;
            }
            
            public function mostrar(){
                return "Producto: $this->nombre, Código: $this->codigo, Precio: $this->precio, Año de Caducidad: $this->anioCaducidad, Mes: $this->mes";
            }


        }
        class electronica extends Producto{
                public $garantia;

                public function __construct($codigo, $precio, $nombre,$garantia){
                    parent::__construct($codigo, $precio, $nombre);
                    $this->garantia=$garantia;

                }


                public function getgarantia(){  
                    return $this->garantia;
                }

                public function mostrar(){
                    return "Producto: $this->nombre, Código: $this->codigo, Precio: $this->precio, Garantia: $this->garantia";

                }


        }
    ?>
</body>
</html>