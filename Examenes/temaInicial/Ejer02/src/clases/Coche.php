

use App\src\clases;



class Coche implements Encendible{

    $gasolina;
    $bateria
    enum $estado{
        'encendido','apagado';
    }
    public function __construct()
    {
            $this->gasolina=0;
            $this->bateria=10;
            $this->estado='apagado';
    }

    public function encender(){
        if($this->gasolina>0){
            $this->bateria=0;
            $this->estado='apagado';

            echo "Se ha arrancado el coche";
            $this->gasolina-1;

        }else{
            echo "No se pudo arrancar";
        }
    }

    public function apagar(){
         $reposar=$this->gasolina;
        if($this->estado='encendido'){
            public funciont apagar(){
            return $this->estado='apagado';
        }else{
            echo "el coche esta parado ";
            $this->reposar++;
        }
    }
    }

   



}



