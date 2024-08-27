<?php
class Personaje {
    protected $nombre;
    protected $vida;
    protected $dañoMin;
    protected $dañoMax;
    protected $probabilidadEvasion;

    public function __construct($nombre, $vida, $dañoMin, $dañoMax, $probabilidadEvasion) {
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->dañoMin = $dañoMin;
        $this->dañoMax = $dañoMax;
        $this->probabilidadEvasion = $probabilidadEvasion;
    }

    public function atacar(){
        return rand($this->dañoMin, $this->dañoMax);
    }

    public function evadirAtaque(){
        return rand(0,100) < $this->probabilidadEvasion;
    }

    public function elPersonajeEstaVivo(){
        return $this->vida > 0;
    }

    public function recibirAtaque($daño){
        $this->vida = $this->vida - $daño;
    }

    public function getNombre(){
        return $this->vida;
    }

    public function getVida(){
        return $this->vida;
    }
}

class DeadPool extends Personaje{

}

class Wolverine extends Personaje{
    
}