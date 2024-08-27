<?php

interface PersonajeInterface {
    public function atacar();
    public function recibirDaño($daño);
    public function evadir();
    public function estaVivo();
    public function getVida();
    public function getNombre();
}

trait CombateTrait {
    public function atacar() {
        return rand($this->dañoMin, $this->dañoMax);
    }

    public function recibirDaño($daño) {
        $this->vida -= $daño;
    }

    public function evadir() {
        return rand(0, 100) < $this->probabilidadEvasion;
    }

    public function estaVivo() {
        return $this->vida > 0;
    }

    public function getVida() {
        return $this->vida;
    }

    public function getNombre() {
        return $this->nombre;
    }
}

abstract class Personaje implements PersonajeInterface {
    protected $nombre;
    protected $vida;
    protected $dañoMin;
    protected $dañoMax;
    protected $probabilidadEvasion;

    use CombateTrait;

    public function __construct($nombre, $vida, $dañoMin, $dañoMax, $probabilidadEvasion) {
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->dañoMin = $dañoMin;
        $this->dañoMax = $dañoMax;
        $this->probabilidadEvasion = $probabilidadEvasion;
    }
}

class Deadpool extends Personaje {
    public function __construct($vida) {
        parent::__construct('Deadpool', $vida, 10, 80, 25);
    }
}

class Wolverine extends Personaje {
    public function __construct($vida) {
        parent::__construct('Wolverine', $vida, 10, 100, 20);
    }
}

function simularBatalla(PersonajeInterface $p1, PersonajeInterface $p2) {
    $turno = 1;

    while ($p1->estaVivo() && $p2->estaVivo()) {
        echo "Turno $turno:\n";
        sleep(1);

        if ($p1->estaVivo()) {
            if (!$p2->evadir()) {
                $daño = $p1->atacar();
                echo "{$p1->getNombre()} ataca a {$p2->getNombre()} y causa $daño puntos de daño.\n";
                $p2->recibirDaño($daño);
            } else {
                echo "{$p2->getNombre()} evade el ataque de {$p1->getNombre()}.\n";
            }
        }

        if ($p2->estaVivo()) {
            if (!$p1->evadir()) {
                $daño = $p2->atacar();
                echo "{$p2->getNombre()} ataca a {$p1->getNombre()} y causa $daño puntos de daño.\n";
                $p1->recibirDaño($daño);
            } else {
                echo "{$p1->getNombre()} evade el ataque de {$p2->getNombre()}.\n";
            }
        }

        echo "Vida de {$p1->getNombre()}: {$p1->getVida()}\n";
        echo "Vida de {$p2->getNombre()}: {$p2->getVida()}\n";

        $turno++;
    }

    $ganador = $p1->estaVivo() ? $p1 : $p2;
    echo "{$ganador->getNombre()} ha ganado la batalla.\n";
}

$vidaDeadpool = intval(readline("Ingrese el nivel de vida de Deadpool: "));
$vidaWolverine = intval(readline("Ingrese el nivel de vida de Wolverine: "));

$deadpool = new Deadpool($vidaDeadpool);
$wolverine = new Wolverine($vidaWolverine);

simularBatalla($deadpool, $wolverine);
?>
