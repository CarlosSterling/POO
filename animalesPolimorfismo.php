<?php
class Animales
{
    public function hacerSonido()
    {
        echo "Sonido de Animal" . "\n";
    }
}

class Perro extends Animales
{
    public function hacerSonido()
    {
        echo "Guau Guau" . "\n";
    }
}

class Gato extends Animales
{
    public function hacerSonido()
    {
        echo "Miau Miau" . "\n";
    }
}

// Polimorfismo
function hacerSonidoAnimal(Animales $animal)
{
    $animal->hacerSonido();
}

$perro = new Perro();
echo hacerSonidoAnimal($perro);

$gato = new Gato();
echo hacerSonidoAnimal($gato);
