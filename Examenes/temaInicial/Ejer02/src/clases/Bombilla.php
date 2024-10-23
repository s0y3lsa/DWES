

use App\src\clases;
class Bombilla implements encendible{

    $horasdevida;

    public function __construct(int $horasdevida)
    {
           $horasdevida=$horasdevida;
    }




        public function encender(){
            if($this->$horasdevida>0){
                echo "bombilla encendida";
                $this->horasdevida-=2;
            }
           
        }

        public function apagar(){
            echo "Se ha apagado la bombilla";
        }
        
        public function sethorasdevida($horasdevida){
            $this->horasdevida=$horasdevida;
        }
        public function gethorasdevida($horasdevida){
            $this->horasdevida=$horasdevida;
        }
}


