<?php

class Animales {

    public string $clase =" Salvajes";

    public  function __construct(public string $nombre, public string $claseAnimal) {
    }

    public function ObtenerInformacion(){
        return "el ".$this->claseAnimal." se llama ".$this->nombre. " y pertenece a los animales".$this->clase;
    }
}

class Domesticos extends Animales {
    public string $clase = "Domesticos";

    public function Clasificacion() {
        if ($this->claseAnimal == "Perro"){
            $mensaje = $this->nombre ." es un ".$this->claseAnimal. " y al ser un animal " . $this->clase . " puede vivir dentro de la casa";
        } else {
            $mensaje = $this->nombre . " al ser un animal " . $this->clase . " debe vivir en la selva";
        }
        return $mensaje;
    }
}