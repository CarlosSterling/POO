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
    public $edad;

    public function __construct($nombreAprendiz, $apellidoAprendiz, $municipioAprendiz, $edadAprendiz){
        $this->edad = $edadAprendiz;
        

        parent:: __construct($nombreAprendiz, $apellidoAprendiz, $municipioAprendiz);
    }    
    public function saludar()
    {
        echo "Me llamo " . $this->nombre. " " .$this->apellido.", soy del municipio de " . $this->municipio." tengo ".$this->edad. " aňos"."\n";
    }

    public function saludarGrupo()
    {
        echo "Hola a todos! ";
        $this->saludar();
    }
}

class sanAgustin extends adso810{
    public $genero;

    public function __construct($nombreAprendiz, $apellidoAprendiz, $municipioAprendiz, $generoAprendiz){
        $this->genero = $generoAprendiz;

        parent:: __construct($nombreAprendiz, $apellidoAprendiz, $municipioAprendiz);
    }  

    public function saludar(){
        echo "Hola mi nombre es ".$this->nombre." ".$this->apellido.", vengo del muicipio de ".$this->municipio." y soy de genero ".$this->genero."\n";
    }
    public function saludarGrupo()
    {
        echo "Quiubo! ";
        $this->saludar();
    }
}

//creacion de polimorfismo
function presentarAprendiz (adso810 $aprendiz){
    $aprendiz->saludar();


}
// intancia de las clases concretas
$luis = new saladoBlanco("luis","Guiron","Salado Blanco", 54);
presentarAprendiz($luis);
//uso de metodos especificos de las clases concretas
$luis->saludarGrupo();


$maria = new sanAgustin("Maria", "Rico", "Isnos", "Femenino");
presentarAprendiz($maria);
$maria->saludarGrupo();


