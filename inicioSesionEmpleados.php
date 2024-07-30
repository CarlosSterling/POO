<?php
require_once "empleadosAlmacen.php";

class InicioSesion extends Almacen{

    public function __construct(string $nombreEmpleado = '', string $apellidoEmpleado = '', int $edadEmpleado = 0, string $cargoEmpleado = '', string $emailEmpleado='', string $passwordEmpleado=''){
    parent:: __construct($nombreEmpleado, $apellidoEmpleado,$edadEmpleado, $cargoEmpleado, $emailEmpleado, $passwordEmpleado);
     
    }

    public function solicitarDatosIngreso():void{
        $this->email = strval(readline("Ingrese el correo: "));
        $this->password = strval(readline("Contraseña: "));
    }

    public function iniciarSesion(): string {

        $emailEmpleado = strval(readline("Ingrese su email: "));
        $passwordEmpleado = strval(readline("Ingrese su contraseña: "));

        if ($this->email === $emailEmpleado && $this->password === $passwordEmpleado) {
            return "Inicio de sesión exitoso. Bienvenido " . $this->nombre . " " . $this->apellido;
        } else {
            return "Correo electrónico o contraseña incorrectos, verifica tus datos.";
        }
    }
    
}

