<?php

class Colombia {

public $nombreDepartamento;
public $ubicacionDepartamento;
public $acentoDepartamento;

public function __construct(public string $nombre,public string $ubicacion,public string $acento){
    $this->nombreDepartamento = $nombre;
    $this->ubicacionDepartamento = $ubicacion;
    $this->acentoDepartamento = $acento;
}

public function mostrarinformacion(){
    return "el ".$this->nombreDepartamento. " se encuenta ubicado en la zona ".$this->ubicacionDepartamento. " y su acento es el ".$this->acentoDepartamento;
}
}