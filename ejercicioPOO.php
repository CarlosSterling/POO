<?php
abstract class Empleado {

    private $nombre;
    private $apellido;
    private $salario;


    public function __construct($nombre, $apellido, $salario) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->salario = $salario;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setSalario($salario){
         $this->salario = $salario;
    }

    abstract public function calcularBonificacion();

    abstract public function mostrarDetalles();
}



