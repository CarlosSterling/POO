<?php

abstract class Figura {
    protected $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    abstract public function calcularArea();

    abstract public function getNombre();
}

class Circulo extends Figura {
    private $radio;

    public function __construct($color, $radio) {
        parent::__construct($color);
        $this->radio = $radio;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    public function getRadio() {
        return $this->radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }

    public function getNombre() {
        return "Círculo";
    }
}

class Rectangulo extends Figura {
    private $ancho;
    private $alto;

    public function __construct($color, $ancho, $alto) {
        parent::__construct($color);
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function setAncho($ancho) {
        $this->ancho = $ancho;
    }

    public function getAncho() {
        return $this->ancho;
    }

    public function setAlto($alto) {
        $this->alto = $alto;
    }

    public function getAlto() {
        return $this->alto;
    }

    public function calcularArea() {
        return $this->ancho * $this->alto;
    }

    public function getNombre() {
        return "Rectángulo";
    }
}

class Triangulo extends Figura {
    private $base;
    private $altura;

    public function __construct($color, $base, $altura) {
        parent::__construct($color);
        $this->base = $base;
        $this->altura = $altura;
    }

    public function setBase($base) {
        $this->base = $base;
    }

    public function getBase() {
        return $this->base;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }

    public function getNombre() {
        return "Triángulo";
    }
}

function mostrarArea(Figura $figura) {
    echo "El área del " . $figura->getNombre() . " es: " . $figura->calcularArea() . "\n";
}

$circulo = new Circulo("Rojo", 5);
mostrarArea($circulo);

$rectangulo = new Rectangulo("Azul", 4, 6);
mostrarArea($rectangulo);

$triangulo = new Triangulo("Verde", 3, 4);
mostrarArea($triangulo);
