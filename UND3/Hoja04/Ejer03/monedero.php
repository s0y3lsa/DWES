<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class monedero{

            private $dinero;
            //atrivuto estatico 
            private static $numero_monederos=0;
            public function __construct($dineroInicial){
                $this->dinero = $dineroInicial;
                //incrementamos el numero de monederos
                self::$numero_monederos++; 
            }
            // Destructor para decrementar el número de monederos cuando se destruye un objeto
            public function __destruct() {
            self::$numero_monederos--; // Decrementamos el número de monederos
            }
            // Método para meter dinero en el monedero
            public function meterDinero($cantidad) {
                if ($cantidad > 0) {
                $this->dinero += $cantidad;
            }
            }

             // Método para sacar dinero del monedero
            public function sacarDinero($cantidad) {
            if ($cantidad > 0 && $this->dinero >= $cantidad) {
                $this->dinero -= $cantidad;
            } else {
            echo "No se puede sacar esa cantidad de dinero.<br>";
            }
            }
            // Método para consultar el dinero disponible
            public function consultarDinero() {
            return $this->dinero;
            }
    
            // Método estático para obtener el número de monederos creados
            public static function obtenerNumeroMonederos() {
            return self::$numero_monederos;
             }
        }

    ?>
</body>
</html>