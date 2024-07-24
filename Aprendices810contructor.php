<?php

class Aprendices{

//propiedades

public string $nombre;
public int $edad;
public string $email;
public float $promedio;

public function __construct($nombre, $edad,$email,$promedio){

    $this ->nombre = $nombre;
    $this ->edad = $edad;
    $this ->email = $email;
    $this ->promedio = $promedio;
}

//Métodos 

public function Aprender($texto = "Saluda al aprendiz"){
    return $texto."Mi nombre es ".$this->nombre." tengo ".$this->edad." años, mi corrreo es ".$this->email. " y tengo u promedio de ".$this->promedio;

}
    
}

$maikel = new Aprendices("Maikel", 22, "maikel@gmail.com", 5);
echo $maikel-> Aprender()."\n";

$maikel = new Aprendices("Tatiana", 20, "maikel@gmail.com", 4);
echo $maikel-> Aprender("Hola niña ")."\n";




