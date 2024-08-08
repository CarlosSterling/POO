<?php

class aprendicesADSO810{

    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
      
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        return $this->nombre = $nombre;
    }

}

class datosAprendiz extends aprendicesADSO810{

    public function __construct($nombre) {
        parent::__construct($nombre);
    }
    
    public function aprender(){
        echo "El aprendiz " . $this->getNombre() . " está en el ADSO 2900810"."\n";
    }
     
}


$Aprendiz = new datosAprendiz("carlos");
echo $Aprendiz->getNombre()."\n";
$Aprendiz->aprender();

$Aprendiz->setNombre("Andres");
echo $Aprendiz->getNombre()."\n";
$Aprendiz->aprender()."\n";




