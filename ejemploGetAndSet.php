<?php

class AprendicesADSO810{

    private $nombre;
    private $apellido;
    private $promedio;

    public function __construct($nombreAprendiz,$apellidoAprendiz,$promedioAprendiz) {
        $this->nombre = $nombreAprendiz;
        $this->apellido = $apellidoAprendiz;
        $this->promedio = $promedioAprendiz;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellidoAprendiz){
        $this->apellido = $apellidoAprendiz;  
    }

    public function getPromedio(){
        return $this->promedio;
    }

    public function setPromedio($promedioAprendiz){
        $this->promedio = $promedioAprendiz;  
    }

}


class Aprobacion extends AprendicesADSO810{

    public function __construct($nombreAprendiz,$apellidoAprendiz,$promedioAprendiz) {
        parent::__construct($nombreAprendiz,$apellidoAprendiz,$promedioAprendiz);
    }

    public function aprobar(){
        if ($this->getPromedio() >=7){
            echo "el aprendiz ".$this->getNombre()." ".$this->getApellido(). " aprobó el curso";
        }else{
            echo "el aprendiz ".$this->getNombre()." ".$this->getApellido(). " reprobó el curso";
        }
    }
    

}
/*$aprendiz = new AprendicesADSO810("Carlos", "Sterling", 5);

echo $aprendiz->getNombre()."\n";
echo $aprendiz->getApellido()."\n";
echo $aprendiz->getPromedio()."\n";

$aprendiz->setNombre("Andres")."\n";
$aprendiz->setApellido("Calderon")."\n";
$aprendiz->setPromedio(7)."\n";

echo $aprendiz->getNombre()."\n";
echo $aprendiz->getApellido()."\n";
echo $aprendiz->getPromedio()."\n";*/

$aprendiz = new Aprobacion("Carlos", "Sterling", 8);
$aprendiz1 = new Aprobacion("Andres", "Calderon", 6);

echo $aprendiz->aprobar()."\n";
echo $aprendiz1->aprobar();

