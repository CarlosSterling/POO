<?php

class Adso103{
//propiedades

public $nombre = "Alejandro";
public $curso = "NodJS";



//metodos

public function saludar(){
   return "Hola mi nombre es ".$this->nombre. " y me gusta la programacion en ".$this->curso;
}

}


//instancias
$Aprendiz = new Adso103();
echo $Aprendiz-> saludar();

