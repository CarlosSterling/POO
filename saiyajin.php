<?php

        class Saiyajin{

            //Definimos nuestro primer atributo
            public $nombre = "Goku";
            public int $nivelDePelea = 100; // Definimos atrubutos con tipado estricto (tipo de dato que va a recibir)

            public function Saludar (){
                return "Hola Mi nombre es ".$this->nombre;
            }
            public function NivelDePelea(){ //se puede tipar la funcion para indicarle que tipo de dato va adevolver
            return $this->nombre." tiene ".$this->nivelDePelea." de nivel de Pelea";

        }

        }

        //Crear nuestro primer objeto. cuando se crea un objeto a partir de una clase se conoce como instanciar.

    $goku = new Saiyajin();
        echo $goku->NivelDePelea();
