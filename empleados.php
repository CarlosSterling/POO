<?php

class Empleados{
    //propiedades
    public string $nombre;
    public string $nombreCliente;
    public int  $edad;
    public int $numCompra;

    //Método constructor
    public function __construct(
        $nombreEmpleado, 
        $edadEmpleado,$cliente,
        $compraDelCliente){

        $this->nombre=$nombreEmpleado;
        $this->nombreCliente=$cliente;
        $this->edad=$edadEmpleado;
        $this->numCompra= $compraDelCliente;

    }
    
    public function saludar ($texto = " Hola, yo soy "){
        return $texto. $this->nombre." y tengo ".$this->edad." años";
    }

    public function cobrar(){
        echo "El cliente ".$this->nombreCliente." realizó la compra número ".$this->numCompra. " la venta fue realizada por ".$this->nombre;

    }

    

}

//extender una clase 

class datos extends Empleados{

    public $salarioCliente;

    public function __construct(
        $nombreEmpleado, 
        $edadEmpleado,
        $cliente,
        $compraDelCliente,
        $salarioCliente){

            parent:: __construct($nombreEmpleado, $edadEmpleado, $cliente, $compraDelCliente);
            $this-> salarioCliente= $salarioCliente;

}

public function mostrarDatos(){

return " El empleado ".$this->nombre. " tiene un salario de ".$this->salarioCliente;

}

}