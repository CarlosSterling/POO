<?php

$gokuVida = intval(readline("Ingrese la vida de Goku: "));
$vegetaVida = intval(readline("Ingrese la vida de Vegeta: "));

class Personaje {
    protected string $nombre;
    protected int $vida;
    protected int $dañoMinimo;
    protected int $dañoMaximo;
    protected int $probabilidadEvasionAtaque;
    protected bool $regenerarse = false;

    public function __construct(string $nombre, int $vida, int $dañoMinimo, int $dañoMaximo, int $probabilidadEvasionAtaque) {
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->dañoMinimo = $dañoMinimo;
        $this->dañoMaximo = $dañoMaximo;
        $this->probabilidadEvasionAtaque = $probabilidadEvasionAtaque;
    }

    public function atacar(Personaje $objetivo): void {
        $daño = rand($this->dañoMinimo, $this->dañoMaximo);
        if (rand(1, 100) <= $objetivo->probabilidadEvasionAtaque) {
            echo "{$this->nombre} ha atacado a {$objetivo->getNombre()} pero el ataque ha sido evadido.\n";
            return;
        }

        echo "El {$this->nombre} ha atacado a {$objetivo->getNombre()} causando {$daño} puntos de daño.\n";
        $objetivo->recibirAtaque($daño);
    }

    public function recibirAtaque(int $daño): void {
        $this->vida -= $daño;
        echo "{$this->nombre} recibió {$daño} puntos de daño. La salud restante es {$this->vida}.\n";
        if ($this->vida <= 0) {
            echo "{$this->nombre} ha sido derrotado.\n";
        }
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getVida(): int {
        return $this->vida;
    }
}

class Vegeta extends Personaje {
    public function __construct(int $vida) {
        parent::__construct("Vegeta", $vida, 10, 20, 25); 
    }
}

class Goku extends Personaje {
    public function __construct(int $vida) {
        parent::__construct("Goku", $vida, 15, 25, 20); 
    }
}

$goku = new Goku($gokuVida);
$vegeta = new Vegeta($vegetaVida);

$goku->atacar($vegeta);
$vegeta->atacar($goku);