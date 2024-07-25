<?php

class Aprendices{

//propiedades

public string $nombre;
public int $edad;
public string $email;
public float $promedio;

public function __construct($nombreAprendiz, $edadAprendiz,$emailAprendiz,$promedioAprendiz){

    $this ->nombre = $nombreAprendiz;
    $this ->edad = $edadAprendiz;
    $this ->email = $emailAprendiz;
    $this ->promedio = $promedioAprendiz;
}

//Métodos 

public function Aprender($texto = "Del grupo 810: "){
    return $texto."Mi nombre es ".$this->nombre." tengo ".$this->edad." años, mi corrreo es ".$this->email. " y tengo u promedio de ".$this->promedio;

}
    
}






