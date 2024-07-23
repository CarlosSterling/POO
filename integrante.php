<?php
class Integrantes {

    public string $nombre = "Alaia";
    public string $apellido = "Sterling Güisa";

    public function Saludar (){
        echo "Mi nombre es ".$this -> nombre." ".$this->apellido;

    }

}

$integrante = new Integrantes();

$integrante ->Saludar();