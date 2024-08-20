<?php
declare(strict_types=1);

abstract class Personajes{
    protected string $nombre;
    protected int $salud;
    protected int $fuerza;

    public function __construct(string $nombre, int $salud, int $fuerza) {
        $this->nombre = $nombre;
        $this->salud = $salud;
        $this->fuerza = $fuerza;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function getSalud(): int {
        return $this->salud;
    }

    public function setSalud(int $salud): void{
        $this->salud = $salud;
    }

    public function getFuerza(): int{
        return $this->fuerza;
    }

    public function setFuerza(int $fuerza): void{
        $this->fuerza = $fuerza;
    }

    abstract function recibirDano(int $dano): void;
}

class Guerrero extends Personajes{
    protected int $defensa;

    public function __construct(string $nombre, int $salud, int $fuerza, int $defensa) {
        parent::__construct($nombre, $salud, $fuerza);
        $this->defensa = $defensa;
    }

    public function getDefensa(): int{
        return $this->defensa;
    }

    public function setDefensa(int $defensa): void{
        $this->defensa = $defensa;
    }

    public function recibirDano(int $dano): void {
        $danoReducido = max(0, $dano - $this->defensa);
        $this->salud -= $danoReducido;
        echo "El guerrero {$this->nombre} recibió {$danoReducido} de daño, su salud ahora es {$this->salud}." . "\n";
    }
    

    public function defensa(): void {
        echo "El guerrero {$this->nombre} utilizó defensa de {$this->defensa}."."\n";
    }
}

class Mago extends Personajes{
    protected string $lanzarHechizos;

    public function __construct(string $nombre, int $salud, int $fuerza, string $lanzarHechizos) {
        parent::__construct($nombre, $salud, $fuerza);
        $this->lanzarHechizos = $lanzarHechizos;
    }

    public function getLanzarHechizos(): string{
        return $this->lanzarHechizos;
    }

    public function setLanzarHechizos(string $lanzarHechizos): void{
        $this->lanzarHechizos = $lanzarHechizos;
    }

    public function recibirDano(int $dano): void {
        $this->salud -= $dano;
        echo "El mago {$this->nombre} recibió {$dano} de daño, su salud ahora es {$this->salud}."."\n";
    }

    public function lanzarHechizo(): void {
        echo "El mago {$this->nombre} lanzó el hechizo {$this->lanzarHechizos}."."\n";
    }
}


$guerrero = new Guerrero("Gohan", 100, 3500, 3500);
$mago = new Mago("Dabura", 100, 2800, "Convertir en piedra");

echo $guerrero->getNombre() . " tiene una salud de " . $guerrero->getSalud() . " y una fuerza de " . $guerrero->getFuerza() . "\n";
echo $mago->getNombre() . " tiene una salud de " . $mago->getSalud() . " y una fuerza de " . $mago->getFuerza() . "\n";


$guerrero->recibirDano(10);
$mago->recibirDano(20);

$mago->lanzarHechizo();

$guerrero->setDefensa(12);
$guerrero->defensa();
$guerrero->recibirDano(15);

?>
