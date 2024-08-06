<?php

class empleado
{
    public $nombre;
    public $sueldo;

    public function inicializar($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
      
    }

    public function obtenerInformacion()
    {

        if ($this->sueldo > 3000) {

            echo "señor/a " . $this->nombre . " su sueldo equivale a " . $this->sueldo . " usted debe pagar impuestos"."\n";
        } else {
            echo "señor/a " . $this->nombre . " su sueldo equivale a " . $this->sueldo . " usted no debe pagar impuestos"."\n";
        }
    }
}


$empleado1 = new empleado();
$empleado1->inicializar("Carlos", 3500);
$empleado1->obtenerInformacion();

$empleado2 = new empleado();
$empleado2->inicializar("Andres", 500);
$empleado2->obtenerInformacion();
