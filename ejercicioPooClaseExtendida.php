<?php
require_once "ejercicioPOO.php";

class EmpleadoTiempoCompleto extends Empleado{

    public function calcularBonificacion(){
        return $this->getSalario() * 0.19;
    }

    public function mostrarDetalles() {
        echo "Nombre: " . $this->getNombre() . " " . $this->getApellido() . " Salario: " . $this->getSalario(). " Bonificacion: ".$this->calcularBonificacion()."\n";
    }
}

class EmpleadoMedioTiempo extends Empleado{

    public function calcularBonificacion(){
        return $this->getSalario() *0.05;
    }

    public function  mostrarDetalles(){
        echo "Nombre: ".$this->getNombre() ." ". $this->getApellido(). " Salario: ".$this->getSalario(). " Bonificacion: ".$this->calcularBonificacion()."\n";
    }
}
