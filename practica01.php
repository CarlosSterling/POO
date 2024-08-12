<?php
 class Empleado {

    public string $nombre;
    public int $sueldo;

    public function __construct(string $nombreEmpleado, int $sueldoEmpleado) {
        $this->nombre = $nombreEmpleado;
        $this->sueldo = $sueldoEmpleado;
    }

    public function pagarImpuesto(){
        if($this->sueldo > 3000){
            echo "Seňor ".$this->nombre." su sueldo es de ".$this->sueldo." por lo cual sebe pagar impuesto"."\n";
        }else{
            echo "Seňor ".$this->nombre." su sueldo es de ".$this->sueldo.". ustede no debe pgar sueldo"."\n";
        }
    }

 }

 $empleado = new empleado("Carlos", 3000);
 $empleado->pagarImpuesto();

 $empleado1 = new empleado("Andres", 3500);
 $empleado1->pagarImpuesto();