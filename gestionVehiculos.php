<?php

abstract class Vehiculos{

    protected string $marca;
    protected int $modelo;
    protected int $precio;
    public static $contadorVehiculos = 0;

    public function __construct($marcaVehiculo, $modeloVehiculo, $precioVehiculo) {
        $this->marca = $marcaVehiculo;
        $this->modelo = $modeloVehiculo;
        $this->precio = $precioVehiculo;
        self::$contadorVehiculos++;
    }

    public static function mostrarContador(){
        return "La cantidad de vehiculos es: ". self::$contadorVehiculos;
    }

    abstract public function calcularDescuento();

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marcaVehiculo){
        $this->marca = $marcaVehiculo;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modeloVehiculo){
        $this->modelo = $modeloVehiculo;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio($precioVehiculo){
        if ($precioVehiculo >= 0){
            $this->precio = $precioVehiculo;
        }else{
            echo "El precio no puede ser negativo";
        }
        
    }
  
}

class Coche extends Vehiculos{

    private int $numeroPuertas;

    public function __construct($marcaVehiculo, $modeloVehiculo, $precioVehiculo,$numeroPuertasVehiculo){
        parent:: __construct($marcaVehiculo, $modeloVehiculo, $precioVehiculo); 
        $this->numeroPuertas = $numeroPuertasVehiculo;

    }

    public function calcularDescuento(){
        return $this->precio * 0.10;
    }

}

class Moto extends Vehiculos{

private int $caballosFuerza;

public function __construct($marcaVehiculo, $modeloVehiculo, $precioVehiculo, $caballosFuerza) {
    parent::__construct($marcaVehiculo, $modeloVehiculo, $precioVehiculo);
    $this->caballosFuerza = $caballosFuerza;
}


public function calcularDescuento(){
    return $this->precio * 0.05;
}

}

class Camion extends Vehiculos{
    private int $capacidadCarga;

    public function __construct($marcaVehiculo, $modeloVehiculo, $precioVehiculo,$capacidadCarga){
        parent:: __construct($marcaVehiculo, $modeloVehiculo, $precioVehiculo); 
        $this->capacidadCarga = $capacidadCarga;
    
    }
    
    public function calcularDescuento(){
        return $this->precio * 0.15;
    }

}


function mostrarDescuento(Vehiculos $vehiculo) {
    return ($vehiculo->getPrecio() - $vehiculo->calcularDescuento());
}


$coche = new Coche("Ford",2023,50000000,4);
echo "El precio final del coche ". $coche->getMarca(). " es de " . mostrardescuento($coche)."\n";

//echo "La precio del coche ". $coche->getMarca(). "es: ".$coche->getPrecio()."\n";
$coche->setPrecio(60000000);
echo "El precio del coche ".$coche->getMarca() ." se modifico a: ".$coche->getprecio()."\n";


$moto = new Moto ("Suzuki", 2024, 11800000, 18);
echo "El precio final de la moto ".$moto->getMarca() ." es de ".mostrarDescuento($moto)."\n";

$moto1 = new Moto ("BMW", 2025, 76000000, 40);
echo "El precio final de la moto ".$moto1->getMarca() ." es de ".mostrarDescuento($moto1)."\n";

$camion = new Camion("Mercedes", 2020, 116800000, 1150);
echo "El precio final del camion ".$camion->getMarca() ." es de ".mostrarDescuento($camion)."\n";

$camion1 = new Camion("Foton", 2000, 1200000000, 1000);
echo "El precio final del camion ".$camion1->getMarca() ." es de ".mostrarDescuento($camion1)."\n";

echo Vehiculos::mostrarContador();