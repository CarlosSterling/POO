<?php

class AprendicesAdso810{

    protected $nombre;
    protected $telefono;

    public function __construct($nombre, $telefono){
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }

}

class DatosAprendicesAdso810 extends AprendicesAdso810{

   public function __construct($nombre, $telefono){
        parent:: __construct($nombre, $telefono);
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }


}

class AprendizEspecial extends DatosAprendicesAdso810 {

    public function getNombre() {
        return "Aprendiz: " . parent::getNombre();
    }

    public function getTelefono() {
        return "Teléfono: " . parent::getTelefono();
    }
}


$aprendizEspecial = new AprendizEspecial("Tatiana", 2123444);

echo $aprendizEspecial->getNombre()."\n"; 
echo $aprendizEspecial->getTelefono()."\n"; 

$aprendizEspecial->setNombre("Maikel");
$aprendizEspecial->setTelefono("312345");

echo $aprendizEspecial->getNombre()."\n";
echo $aprendizEspecial->getTelefono()."\n"; 
