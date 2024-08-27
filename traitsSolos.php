<?php

trait Hola{
    public function DecirHola(){
        echo "Hola ";
    }
}

trait Mundo{
    public function DecirMundo(){
        echo "Mundo";
    }

}

class MiHolaMundo{
    use Hola, Mundo;
    public function DecirAdmiracion(){
        echo "!";
    }
}

$nuevo = new MiHolaMundo();
$nuevo ->DecirHola();
$nuevo ->DecirMundo();
$nuevo ->DecirAdmiracion();