<?php
class Personaje {
    protected $nombre;
    protected $vida;
    protected $dañoMin;
    protected $dañoMax;
    protected $probabilidadEvasion;

    public function __construct($nombre, $vida, $dañoMin, $dañoMax, $probabilidadEvasion) {
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->dañoMin = $dañoMin;
        $this->dañoMax = $dañoMax;
        $this->probabilidadEvasion = $probabilidadEvasion;
    }

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
class Deadpool extends Personaje {
    public function __construct($vida) {
        parent::__construct('DeadPool', $vida, 10, 100, 20);
    }
}

class Wolverine extends Personaje {
    public function __construct($vida) {
        parent::__construct('Wolverine', $vida, 10, 120, 25);
    }
}

function simularBatalla($deadpool, $wolverine) {
    $turno = 1;
    $atacaDeadpool = true;
    $atacaWolverine = true;

    while ($deadpool->estaVivo() && $wolverine->estaVivo()) {
        echo "Turno $turno:\n";
        sleep(1);

        if ($atacaDeadpool && $deadpool->estaVivo()) {
            if (!$wolverine->evadir()) {
                $daño = $deadpool->atacar();
                echo "{$deadpool->getNombre()} ataca a {$wolverine->getNombre()} y causa $daño puntos de daño.\n";
                $wolverine->recibirDaño($daño);

                if ($daño == 80) {
                    echo "{$deadpool->getNombre()} causa daño máximo. {$wolverine->getNombre()} no puede atacar en el siguiente turno.\n";
                    $atacaWolverine = false;
                } else {
                    $atacaWolverine = true;
                }
            } else {
                echo "{$wolverine->getNombre()} evade el ataque de {$deadpool->getNombre()}.\n";
            }
        }

        if ($atacaWolverine && $wolverine->estaVivo()) {
            if (!$deadpool->evadir()) {
                $daño = $wolverine->atacar();
                echo "{$wolverine->getNombre()} ataca a {$deadpool->getNombre()} y causa $daño puntos de daño.\n";
                $deadpool->recibirDaño($daño);

                if ($daño == 100) {
                    echo "{$wolverine->getNombre()} causa daño máximo. {$deadpool->getNombre()} no puede atacar en el siguiente turno.\n";
                    $atacaDeadpool = false;
                } else {
                    $atacaDeadpool = true;
                }
            } else {
                echo "{$deadpool->getNombre()} evade el ataque de {$wolverine->getNombre()}.\n";
            }
        }

        echo "Vida de {$deadpool->getNombre()}: {$deadpool->getVida()}\n";
        echo "Vida de {$wolverine->getNombre()}: {$wolverine->getVida()}\n";
    

        $turno++;
    }

    if ($deadpool->estaVivo()) {
        echo "{$deadpool->getNombre()} ha ganado la batalla.\n";
    } else {
        echo "{$wolverine->getNombre()} ha ganado la batalla.\n";
    }
}


$vidaDeadpool = intval(readline("ingrese el nivel de vida del Deadpool: "));
$vidaWolverine = intval(readline("ingrese el nivel de vida del Wolverine: "));

$deadpool = new Deadpool($vidaDeadpool);
$wolverine = new Wolverine($vidaWolverine);

simularBatalla($deadpool, $wolverine);