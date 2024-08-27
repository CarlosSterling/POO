<?php
abstract class Pelea {
    protected $vida;
    protected $dañoMin;
    protected $dañoMax;
    protected $probabilidad;
    
    public function __construct($vida, $dañoMin, $dañoMax, $probabilidad) {
        $this->vida = $vida;
        $this->dañoMin = $dañoMin;
        $this->dañoMax = $dañoMax;
        $this->probabilidad = $probabilidad;
    }

    abstract function ataque();
    abstract function defender($daño);
    abstract function regeneracion();
    abstract function estaVivo();

}

class Deadpool extends Pelea {
    public function __construct($vida) {
        parent::__construct($vida, 10, 80, 25);
    }

    public function ataque() {
        $daño = rand($this->dañoMin, $this->dañoMax);
        echo "Deadpool ataca a Wolverine con un poder de $daño puntos." . "\n";
        return $daño;
    }

    public function defender($daño) {
        $esquivar = rand(0, 100);
        if ($esquivar <= $this->probabilidad) {
            echo "Deadpool esquiva el ataque" . "\n";
        } else {
            echo "Deadpool recibe el ataque de Wolverine causándole un daño de $daño puntos" . "\n";
            $this->vida = $this->vida - $daño;
            echo "Vida de Deadpool: " . $this->vida . "\n";
        }
    }

    public function regeneracion() {
        if ($this->vida < $this->vidaInicial) {
            echo "Deadpool se regenera, recuperando $regeneracion puntos de vida. Vida actual: " . $this->vida . "\n";
        }
    }

    public function estaVivo() {
        return $this->vida > 0;
    }
}
class Wolvery extends Pelea {
    public function __construct($vida) {
        parent::__construct($vida, 10, 100, 25);
    }

    public function ataque() {
        $daño = rand($this->dañoMin, $this->dañoMax);
        echo "Wolverine ataca a Deadpool con un poder de $daño puntos." . "\n";
        return $daño;
    }

    public function defender($daño) {
        $esquivar = rand(0, 100);
        if ($esquivar <= $this->probabilidad) {
            echo "Wolverine esquiva el ataque" . "\n";
        } else {
            echo "Wolverine recibe el ataque de Deadpool causándole un daño de $daño puntos" . "\n";
            $this->vida = $this->vida - $daño;
            echo "Vida de Wolverine: " . $this->vida . "\n";
        }
    }

    public function regeneracion() {
        if ($this->vida < $this->vidaInicial) {
            echo "Wolverine se regenera, recuperando $regeneracion puntos de vida. Vida actual: " . $this->vida . "\n";
        }
    }

    public function estaVivo() {
        return $this->vida > 0;
    }
}

function simularBatalla($deadpool, $wolvery) {
    $turno = 1;

    while ($deadpool->estaVivo() && $wolvery->estaVivo()) {
        echo "------------Turno $turno --------------" . "\n";
        sleep(1);

        $daño = $deadpool->ataque();
        $wolvery->defender($daño);

        if (!$wolvery->estaVivo()) {
            break;
        }

        $daño = $wolvery->ataque();
        $deadpool->defender($daño);

        $turno++;
    }

    if (!$deadpool->estaVivo()) {
        echo "Deadpool ha sido derrotado!" . "\n";
    } elseif (!$wolvery->estaVivo()) {
        echo "Wolverine ha sido derrotado!" . "\n";
    }
}

$vidaDeadpool = readline("Ingrese la vida de Deadpool: ");
$vidaWolvery = readline("Ingrese la vida de Wolverine: ");

$deadpool = new Deadpool($vidaDeadpool);
$wolvery = new Wolvery($vidaWolvery);

simularBatalla($deadpool, $wolvery);