<?php

class Aprendiz{

    //Propiedades
    public $nombre = "luis";
    public $edad = 23;
    public $curso = "PHP";
    //Métodos

    public function Saludar(){
        return $this->nombre. " tiene ".$this->edad." años y estoy en el curso de ".$this->curso;
    }
}
// objestos
$luis = new Aprendiz(); //instanciar

//Imprimir el resultado del metodo
echo $luis -> Saludar();









