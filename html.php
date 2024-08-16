<?php

class Aprendices810{
    protected $nombre;
    protected $telefono;

public function __construct($nombre, $telefono) {
    $this->nombre = $nombre;
    $this->telefono = $telefono;
} 

public function getNombre(){
    return $this->nombre;
}
public function setNombre($nombre){
    $this->nombre = $nombre;
}

public function setTelefono($telefono){
    $this->telefono = $telefono;
}

public function getTelefono(){
    return $this->telefono;
}

}

class CursoPHP extends Aprendices810{

    public function __construct($nombre, $telefono) {
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

$aprendiz = new CursoPHP("Yurgen", 31123456785);
echo $aprendiz->getNombre()."\n";
echo $aprendiz->getTelefono()."\n";


$aprendiz->setNombre("Yeralber");
$aprendiz->setTelefono(312345234);

echo $aprendiz->getTelefono()."\n";
echo $aprendiz->getNombre();