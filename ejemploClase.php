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

}

class perro extends animal{

    public function emitirSonido(){
        echo "El animal es un ".$this->animal." se llama ".$this->nombre." y es de raza ".$this->raza." y hace Miau Miau"."\n";
    }

}

$pelusa = new perro("Lolo", "perro", "pincher");
$pelusa->emitirSonido();

$roky = new perro("roky", "perro", "pastor");
$roky->emitirSonido();


class gato extends animal{

    public function emitirSonido(){
        echo "El animal es un ".$this->animal." se llama ".$this->nombre." y es de raza ".$this->raza." y hace Miau Miau"."\n";
    }
}

$selene = new gato("Star", "gato","comun");
$selene->emitirSonido();

class vaca extends animal{

    public function emitirSonido(){
            echo "El animal es un ".$this->animal." se llama ".$this->nombre." y es de raza ".$this->raza." y hace Muuuuuuuu"."\n";
        }
    }

    $lola = new vaca("lola", "vaca", "lechera");
    $lola->emitirSonido();