<?php

abstract class Vehiculo {
    protected $marca;
    protected $modelo;
    protected $año;

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getAño() {
        return $this->año;
    }

    public function setAño($año) {
        $this->año = $año;
    }

    abstract public function arrancar();
}

class Coche extends Vehiculo {
    private $numeroPuertas;

    public function setNumeroPuertas($numeroPuertas) {
        $this->numeroPuertas = $numeroPuertas;
    }

    public function getNumeroPuertas() {
        return $this->numeroPuertas;
    }

    public function arrancar() {
        echo "El carro $this->marca $this->modelo tiene $this->numeroPuertas. puertas y está arrancando". "\n";
    }
}

class Moto extends Vehiculo {
    private $cilindraje;

    public function getCilindraje() {
        return $this->cilindraje;
    }

    public function setCilindraje($cilindraje) {
        $this->cilindraje = $cilindraje;
    }

    public function arrancar() {
        echo "La moto ". $this->marca." ". $this->modelo. " es cilindraje " . $this->cilindraje. " y está arrancando"."\n";
    }
}

class Camion extends Vehiculo {
    private $capacidadCarga;

    public function setCapacidadCarga($capacidadCarga) {
        $this->capacidadCarga = $capacidadCarga;
    }

    public function getCapacidadCarga() {
        return $this->capacidadCarga;
    }

    public function arrancar() {
        echo "El camión $this->marca $this->modelo con capacidad de carga $this->capacidadCarga kilos, está arrancando.\n";
    }
}


function iniciarVehiculo(Vehiculo $vehiculo) {
    $vehiculo->arrancar();
}


$carro = new Coche();
$carro->setMarca("Toyota");
$carro->setModelo("TXL");
$carro->setNumeroPuertas(4);
$carro->arrancar();

$moto = new Moto();
$moto->setMarca("Suzuki");
$moto->setModelo("DR");
$moto->setCilindraje(150);
$moto->arrancar();

$camion = new Camion();
$camion->setMarca("kenworth");
$camion->setModelo("t800");
$camion->setCapacidadCarga(19050);
$camion->arrancar();
