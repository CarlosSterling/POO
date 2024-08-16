<?php

class AprendicesAdso810{

    private $nombre;
    private $telefono;

    public function __construct($nombre, $telefono){
        $this->nombre = $nombre;
        $this->telefono = $telefono;
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

class DatosAprendicesAdso810 extends AprendicesAdso810{

    public function __construct($nombre, $telefono){
        parent::__construct($nombre, $telefono);
    }

    public function getNombre(){
        return parent::getNombre();
    }

    public function setNombre($nombre){
        parent::setNombre($nombre);
    }

    public function getTelefono(){
        return parent::getTelefono();
    }

    public function setTelefono($telefono){
        parent::setTelefono($telefono);
    }
}

$aprendiz1 = new DatosAprendicesAdso810("Tatiana", 2123444);

echo $aprendiz1->getNombre()."\n";
echo $aprendiz1->getTelefono()."\n";

$aprendiz1->setNombre("Maikel");
$aprendiz1->setTelefono("312345");
echo $aprendiz1->getNombre()."\n";
echo $aprendiz1->getTelefono()."\n";


