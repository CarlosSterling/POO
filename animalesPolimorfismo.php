<?php
class Animales{
    public function hacerSonido (){
        echo "Sonido de Animal";
    }

}

class Perro extends Animales{
    public function hacerSonido (){
       echo "Guau Guau"."\n"; 

    }
}

class Gato extends Animales{
    public function hacerSonido (){
        echo "Miau Miau"."\n"; 
    }
}

class Vaca extends Animales{
    public function hacerSonido (){
        echo "Muuuu Muuuu"."\n"; 
    }
}

class Loro extends Animales{
    public function hacerSonido (){
        echo "Ruuuu Ruuuu"."\n"; 
    }
}

class Mico extends Animales{
    public function hacerSonido (){
        echo "Uaaaa Uaaaaa"."\n"; 
    }
}


//Polimormismo

function hacerSonidoAnimal(Animales $animal) {
    $animal->hacerSonido();
}

//instanciar

$perro = new Perro();
hacerSonidoAnimal($perro);

$gato = new Gato();
hacerSonidoAnimal($gato);

$vaca = new Vaca();
hacerSonidoAnimal($vaca);

$loro = new Loro();
hacerSonidoAnimal($loro);

$mico = new Mico();
hacerSonidoAnimal($mico);