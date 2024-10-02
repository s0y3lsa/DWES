<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    class Cuenta{
        private int $numero;
        private string $titular;
        private float $saldo;

        public function __construct(int $numero, string $titular,float $saldo){
            
            $this->numero = $numero;
            $this->titular = $titular;
            $this->saldo = $saldo;

        }
        public function ingreso($cantidad){
            return $this->saldo+=$cantidad;
        }

        public function reintegro($cantidad){
            return $this->saldo-=$cantidad;
        }

        public function esPreferencia($cantidad){
            if($this->saldo>=$cantidad){
                return true;
            }else{
                return false;
            }
        }

        public function mostrar(){
            print 
        }
    }


?>
</body>
</html>