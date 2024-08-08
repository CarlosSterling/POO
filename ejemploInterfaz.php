<?php

interface Animales {
    public function emitirSonido();
}

class Animal {
    public $nombre;
    public $animal;
    public $raza;

    public function __construct($nombre, $animal, $raza) {
        $this->nombre = $nombre;
        $this->animal = $animal;
        $this->raza = $raza;
    }
}

class Perro extends Animal implements Animales {
    public function emitirSonido() {
        echo "El animal es un " . $this->animal . ", se llama " . $this->nombre . " y es de raza " . $this->raza . " y hace Guau Guau" . "\n";
    }
}

class Gato extends Animal implements Animales {
    public function emitirSonido() {
        echo "El animal es un " . $this->animal . ", se llama " . $this->nombre . " y es de raza " . $this->raza . " y hace Miau Miau" . "\n";
    }
}

class Vaca extends Animal implements Animales {
    public function emitirSonido() {
        echo "El animal es un " . $this->animal . ", se llama " . $this->nombre . " y es de raza " . $this->raza . " y hace Muuuuuuuu" . "\n";
    }
}

$pelusa = new Perro("Lolo", "perro", "pincher");
$pelusa->emitirSonido();

$roky = new Perro("Roky", "perro", "pastor");
$roky->emitirSonido();

$selene = new Gato("Star", "gato", "comun");
$selene->emitirSonido();

$lola = new Vaca("Lola", "vaca", "lechera");
$lola->emitirSonido();


