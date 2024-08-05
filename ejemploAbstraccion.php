<?php

abstract class Vehiculo{

public string $marca; 
public string $modelo;
public string $color;

public function __construct(string $marcavehiculo, string $modeloVehiculo,string $colorVehiculo ) {
    $this->marca = $marcavehiculo;
    $this->modelo = $modeloVehiculo;
    $this->color = $colorVehiculo;
}


abstract public function arrancar();

public function deternerse(){
    echo "la  ".$this->marca." ".$this->modelo." de color ".$this->color. " se ha detenido"."\n";
}
}


class Coche extends Vehiculo{
    public function arrancar(){
        echo "la  ".$this->marca." ".$this->modelo." de color ".$this->color. " ha arrancado"."\n";
    }
}

class Moto extends Vehiculo{
    public function arrancar(){
        echo "la  ".$this->marca." ".$this->modelo." de color ".$this->color. " ha arrancado"."\n";
    }

}

$carro = new Coche("Toyota" ,"LC300", "Blanca");
$carro->arrancar();
$carro->deternerse();

$moto = new Moto("BMW","R 1300 GS","Negra");
$moto->arrancar();
$moto->deternerse();
