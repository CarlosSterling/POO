<?php
class Animales{

    public $nombre = "Bruno";
    public $tipoAnimal = "cuadrupedo";

    public function Ladrar (){
        echo "El perro se llama ".$this -> nombre;
    }

    public function Clasificacion (){
        echo " y se clasifica en mamiferos y es un ". $this ->tipoAnimal;
    }

}

$perro = new Animales ();
$perro -> Ladrar()."\n";
$perro -> Clasificacion();

