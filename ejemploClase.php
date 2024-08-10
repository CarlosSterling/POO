<?php

abstract class animal{

    public $nombre;
    public $animal;
    public $raza;

    public function __construct($nombre,$animal,$raza) {
        $this->nombre = $nombre;
        $this->animal = $animal;
        $this->raza = $raza;
    }

abstract public function emitirSonido();
abstract public function saludar();

}

class perro extends animal{

    public function emitirSonido(){
        echo "El animal es un ".$this->animal." se llama ".$this->nombre."\n";
    }

    public function saludar(){
        echo "Hola soy un ".$this->animal." me llamo ".$this->nombre." y saludo ".$this->raza." y hace Miau Miau"."\n";
    }

}


class gato extends animal{

    public function emitirSonido(){
        echo "El animal es un ".$this->animal." se llama ".$this->nombre." y es de raza ".$this->raza." y hace Miau Miau"."\n";
    }

    public function saludar(){
        echo "Hola soy un/a ".$this->animal." me llamo ".$this->nombre." y saludo ".$this->raza." y hace Miau Miau"."\n";
    }
}


class vaca extends animal{

    public function emitirSonido(){
            echo "El animal es un ".$this->animal." se llama ".$this->nombre." y es de raza ".$this->raza." y hace Muuuuuuuu"."\n";
        }

        public function saludar(){
            echo "Hola, soy un/a ".$this->animal." me llamo ".$this->nombre." y saludo Muuuuuu"."\n";
        }
    }
//polimorfismo
    function emitirSonidoAnimal(animal $animalesEjemplo){
        $animalesEjemplo->emitirSonido();
    }

    //instanciar objectos de clases concretas 

    $lola = new vaca("lola", "vaca", "lechera" );
    emitirSonidoAnimal($lola);

    $selene = new gato("Selene", "Gato", "Siames" );
    emitirSonidoAnimal($selene);

    //Instanciar objectos concretos

    $lola = new vaca("lola", "vaca", "lechera" );
    echo $lola->saludar();





    