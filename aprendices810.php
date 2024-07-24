<?php

class Aprendices{

//propiedades

public string $nombre;
public int $edad;
public string $email;
public float $promedio;

//Métodos 

public function Aprender(){
    return "Mi nombre es ".$this->nombre." tengo ".$this->edad." años, mi corrreo es ".$this->email. " y tengo u promedio de ".$this->promedio;

}
    
}
//Instanciar objetos
$Maikel = new Aprendices();
$Maikel -> nombre = "Maikel";
$Maikel -> edad = 19;
$Maikel -> email = "maikelm@gmail.com";
$Maikel -> promedio =001;

echo $Maikel->Aprender()."\n";

$Luis = new Aprendices();
$Luis -> nombre = "Luis";
$Luis -> edad = 23;
$Luis -> email = "lucho@gmail.com";
$Luis -> promedio =10;

echo $Luis->Aprender();




