<?php

trait Bonificacion{

public function calcularBonificacion(float $criterio): float{
        return $this->salarioBase * $criterio;
    }

public function aplicarBonificacion(float $bono): void{
        $this ->salarioBase =+$bono;
}
}

abstract class Empleado{

    protected string $nombre;
    protected float $salarioBase;

    public function __construct(string $nombre, float $salarioBase) {
        $this->nombre = $nombre;
        $this->salarioBase =$salarioBase;

    }

    abstract public function getSalario(): float;

    public function getNombre(): string{
        return $this->nombre;
    }

}

class Proyecto{
    private string $nombre;
    private int $duracion;
    private float $presupuesto;

    public function __construct(string $nombre, int $duracion, float $presupuesto) {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->presupuesto = $presupuesto;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function getDuracion():int{
        return$this->duracion;
    }

    public function getPresupuesto() : float {
        return $this->presupuesto;
    }


}

class Desarrollador extends Empleado{

use Bonificacion;

private int $proyectosCompletados;

public function __construct(string $nombre, float $salarioBase,int $proyectosCompletados ) {
    parent:: __construct($nombre, $salarioBase);
    $this->proyectosCompletados = $proyectosCompletados;
}

public function getSalario(): float{
    $bono = $this->calcularBonificacion(0.5 * $this->proyectosCompletados);
    $this->aplicarBonificacion($bono);
    return $this->salarioBase;
}

}
class Disenador extends Empleado{
    use Bonificacion;
    private int $nivelCreatividad;

    public function __construct(string $nombre, float $salarioBase,int $nivelCreatividad ) {
        parent:: __construct($nombre, $salarioBase);

        $this->nivelCreatividad = $nivelCreatividad;
    }

    public function getSalario(): float{
        $bono = $this->calcularBonificacion(0.3 * $this->nivelCreatividad);
        $this->aplicarBonificacion($bono);
        return $this->salarioBase;
    }
    
}
class GerenteProyecto extends Empleado{
    use Bonificacion;

    private int $proyectosExitosos;

    public function __construct(string $nombre, float $salarioBase,int $proyectosExitosos ) {
        parent:: __construct($nombre, $salarioBase);
        $this->proyectosExitosos = $proyectosExitosos;
    }

    public function getSalario(): float{
        $bono = $this->calcularBonificacion(0.1 * $this->proyectosExitosos);
        $this->aplicarBonificacion($bono);
        return $this->salarioBase;
    }
    
}

$empelados = [

    new Desarrollador("Carlos", 200, 5),
    new Disenador ("Alaia", 400, 2),
    new GerenteProyecto("Alexandra", 2400, 5),
];

foreach ($empelados as $empleado){
    echo "Empleado: ".$empleado->getNombre()."\n";
    echo "Salario total: $".$empleado->getSalario()."\n";
}