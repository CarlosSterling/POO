<?php

class mascotas {

    public  function __construct(public string $nombre, public string $claseAnimal) {
    }

    public function ObtenerInformacion(){
        return "el ".$this->claseAnimal." se llama ".$this->nombre;
    }
}

$perro = new mascotas(claseAnimal:"Perro",nombre:"Loky");
echo $perro->ObtenerInformacion()."\n";

$gato = new mascotas(claseAnimal:"Gato", nombre:"Manchas");
echo $gato->ObtenerInformacion()."\n";

