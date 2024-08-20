<?php

declare(strict_types=1);

class Personaje {
    protected string $nombre;
    protected int $salud;
    protected int $fuerza;

    public function __construct(string $nombre, int $salud, int $fuerza) {
        $this->nombre = $nombre;
        $this->salud = $salud;
        $this->fuerza = $fuerza;
    }

    public function atacar(Personaje $objetivo): void {
        echo "{$this->nombre} ataca a {$objetivo->getNombre()} causando {$this->fuerza} puntos de daño.\n";
        $objetivo->recibirDaño($this->fuerza);
    }

    public function recibirDaño(int $daño): void {
        $this->salud -= $daño;
        echo "{$this->nombre} recibe {$daño} puntos de daño. Salud restante: {$this->salud}.\n";
        if ($this->salud <= 0) {
            echo "{$this->nombre} ha sido derrotado.\n";
        }
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getSalud(): int {
        return $this->salud;
    }

    public function getFuerza(): int {
        return $this->fuerza;
    }
}

class Guerrero extends Personaje {
    private int $defensa;

    public function __construct(string $nombre, int $salud, int $fuerza, int $defensa) {
        parent::__construct($nombre, $salud, $fuerza);
        $this->defensa = $defensa;
    }

    public function recibirDaño(int $daño): void {
        $dañoReducido = $daño - $this->defensa;
        if ($dañoReducido < 0) {
            $dañoReducido = 0;
        }
        echo "{$this->nombre} bloquea {$this->defensa} puntos de daño.\n";
        parent::recibirDaño($dañoReducido);
    }

    public function getDefensa(): int {
        return $this->defensa;
    }
}

class Mago extends Personaje {
    private int $mana;

    public function __construct(string $nombre, int $salud, int $fuerza, int $mana) {
        parent::__construct($nombre, $salud, $fuerza);
        $this->mana = $mana;
    }

    // Método específico para lanzar un hechizo
    public function lanzarHechizo(Personaje $objetivo): void {
        if ($this->mana >= 20) {
            $dañoHechizo = $this->fuerza * 2;
            echo "{$this->nombre} lanza un hechizo a {$objetivo->getNombre()} causando {$dañoHechizo} puntos de daño.\n";
            $objetivo->recibirDaño($dañoHechizo);
            $this->mana -= 20;
        } else {
            echo "{$this->nombre} no tiene suficiente mana para lanzar un hechizo.\n";
        }
    }

    public function getMana(): int {
        return $this->mana;
    }

    public function recuperarMana(int $cantidad): void {
        $this->mana += $cantidad;
        echo "{$this->nombre} recupera {$cantidad} puntos de mana. Mana actual: {$this->mana}.\n";
    }
}


// Crear personajes
$guerrero = new Guerrero("Aragorn", 100, 15, 5);
$mago = new Mago("Gandalf", 80, 10, 50);

// Simulación de batalla
$guerrero->atacar($mago);      // Aragorn ataca a Gandalf
$mago->lanzarHechizo($guerrero); // Gandalf lanza un hechizo a Aragorn
$guerrero->atacar($mago);      // Aragorn ataca a Gandalf nuevamente
$mago->recuperarMana(30);      // Gandalf recupera mana
$mago->lanzarHechizo($guerrero); // Gandalf lanza otro hechizo a Aragorn