<?php

abstract class Animal {

    public $nombre;

    public function __construct($nommbreAnimal) {
        $this->nombre = $nommbreAnimal;
    }

    abstract public function Sonido();
}

class Perro extends Animal{ //En este ejemplo, Perro extiende la clase Animal e implementa el método Sonido().
    public function Sonido(){
        echo "Guau guau"."\n";
    }
        //public function hacerSonido() {
          //  $this->Sonido();
    
    //}
}

$perro = new Perro("Martin");
$perro-> Sonido();

class Gato extends Animal{
    public function Sonido(){
        echo "Miau miau"."\n";    
    }
        //public function hacerSonido() {
       // $this->Sonido();
//}
}

$gato = new Gato ("Misifu");
$gato -> Sonido();
