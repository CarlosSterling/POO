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

class Vaca extends Animales
{
    public function hacerSonido()
    {
        echo "Muuuu Muuuu" . "\n";
    }
}

class Loro extends Animales
{
    public function hacerSonido()
    {
        echo "Ruuuu Ruuuu" . "\n";
    }
}

class Mico extends Animales
{
    public function hacerSonido()
    {
        echo "Uaaaa Uaaaaa" . "\n";
    }
}

class Gallo extends Animales
{
    public function hacerSonido()
    {
        echo "Kikiriqui " . "\n";
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
