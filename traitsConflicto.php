<?php

trait Hola {
    public function DecirHola() {
        echo "Hola desde el trait Hola\n";
    }

    public function DecirAdios() {
        echo "Adios desde el trait Hola\n";
    }
}


trait Mundo {
    public function DecirHola() {
        echo "Hola desde el trait Mundo\n";
    }

    public function DecirAdios() {
        echo "Adios desde el trait Mundo\n";
    }
}


class MiClaseHola {
    use Hola, Mundo {
        Hola::DecirHola insteadof Mundo; 
        Hola::DecirAdios insteadof Mundo; 
    }
}

class HolaMundo {
    use Hola, Mundo {
        Mundo::DecirHola insteadof Hola;  
        Mundo::DecirAdios insteadof Hola; 
        Mundo::DecirHola as Hola;
    }
}


$instanciaHola = new MiClaseHola();
$instanciaHola->DecirHola();  
$instanciaHola->DecirAdios(); 

echo "\n";

$instanciaHolaMundo = new HolaMundo();
$instanciaHolaMundo->DecirHola();
$instanciaHolaMundo->hola();   
$instanciaHolaMundo->DecirAdios(); 