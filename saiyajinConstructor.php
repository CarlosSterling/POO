<?php


class Saiyajin{

    //Definimos nuestro primer atributo
    public string $nombre;
    public int $nivelDePelea ; // Definimos atrubutos con tipado estricto (tipo de dato que va a recibir)

    public function __construct($nombre, $nivelDePelea){
        $this->nombre = $nombre;
        $this->nivelDePelea = $nivelDePelea;
    }
    public function Saludar($texto = " Hola soy ")
    {
        return $texto. $this->nombre;
    }

    public function NivelDePelea()
    { //se puede tipar la funcion para indicarle que tipo de dato va adevolver
        return $this->nombre . " tiene " . $this->nivelDePelea . " de nivel de Pelea";

    }

}

//Crear nuestro primer objeto. cuando se crea un objeto a partir de una clase se conoce como instanciar.

$goku = new Saiyajin("Goku", 100);
echo $goku->Saludar()."\n";
 $vegueta= new Saiyajin("Vegueta", 150);
echo $vegueta->Saludar("soy el principe saiyajin ")."\n";
$gohan= new Saiyajin("Gohan", 250);
echo $gohan->Saludar("Hola soy ")."\n";