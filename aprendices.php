<?php

//Definimos la clase aprendices
class Aprendices{

    //Definir las propiedades

    public $nombre = "Carlos";
    public $edad = 32;
    public $genero = "Masculino";
    public $curso = "php";


    // Definimos los metodos

    public function Obtenerdatos(){
        return $this ->nombre. " tiene ".$this ->edad." años de edad. Es de genero ".$this->genero. " y dicta el curso de ".$this->curso;

    }
}

    // definir los objetos 
    $Carlos = new Aprendices();

    //Mostramos la informacion del aprendices 
    echo $Carlos -> obtenerDatos();




