<?php

class Familia{

    public $nombre;
    public $apellido;
    public function __construct($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function Saludar($saludo = "Hola care bola, mi nombre es: "){
        return $saludo.$this->nombre . " " . $this->apellido;
    }

}

$Alaia = new Familia("Alaia", "Sterling");
echo $Alaia->Saludar("Hola mi nombre es: ")."\n";

$Carlos = new Familia("Carlos", "Sterling");
echo $Carlos->Saludar()."\n";

$Cindy = new Familia("Cindy", "Güisa");
echo $Cindy->Saludar("Me llamo ")."\n";