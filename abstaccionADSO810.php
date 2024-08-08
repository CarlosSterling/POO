<?php

abstract class adso810
{

    public $nombre;
    public $apellido;
    public $municipio;

    public function __construct($nombreAprendiz, $apellidoAprendiz, $municipioAprendiz)
    {
        $this->nombre = $nombreAprendiz;
        $this->apellido = $apellidoAprendiz;
        $this->municipio = $municipioAprendiz;
    }
    abstract public function saludar();
}

class saladoBlanco extends adso810
{
    public function saludar()
    {
        echo "Me llamo " . $this->nombre . " y soy del municipio de " . $this->municipio. "\n";
    }

    public function saludarGrupo()
    {
        echo "Hola a todos! ";
        $this->saludar();
    }
}

class sanAgustin extends adso810{

    public function saludar(){
        echo "Hola mi nombre es ".$this->nombre." y vengo del muicipio de ".$this->municipio."\n";
    }
    public function saludarGrupo()
    {
        echo "Quiubo! ";
        $this->saludar();
    }
}

$luis = new saladoBlanco("Luis", "Giron", "Salado Blanco");
$luis->saludar();
$luis->saludarGrupo();

$maria = new sanAgustin("Maria", "Rico", "San Agustin");
$maria-> Saludar();
$maria->saludarGrupo();



