<?php
class Almacen{

public string $nombre;
public string $apellido;
public int $edad;
public string $cargo;
public string $email;
public string $password;


    public function __construct(string $nombreEmpleado = '', string $apellidoEmpleado = '', int $edadEmpleado = 0, string $cargoEmpleado = '', string $emailEmpleado='', string $passworEmpleado=''){
        $this->nombre = $nombreEmpleado;
        $this->apellido = $apellidoEmpleado;
        $this->edad = $edadEmpleado;
        $this->cargo = $cargoEmpleado;
        $this->email = $emailEmpleado;
        $this->password =$passworEmpleado;
    }
    public function solicitarDatosPararegistro ():void{
        $this->nombre = strval(readline("Ingrese el nombre del empleado a registar: "));
        $this->apellido = strval (readline("Ingrese el apellido del empleado a registar: "));
        $this->edad = intval(readline("Ingrese la edad del empleado a registar: "));
        $this->cargo = strval(readline("Ingrese el cargo del empleado a registar: "));
        $this->email = strval(readline("Ingrese el correo del empleado a registar: "));
        $this->password = strval(readline("Ingrese una contraseña: "));
    }

    public function registrarUsuario(){
        if (!empty($this->nombre) && !empty($this->apellido) && !empty($this->edad) && !empty($this->cargo)&& !empty($this->email)&&!empty($this->password)){
            return "Registro exitoso. bienvenido Sr/a ".$this->nombre;
        }else{
            return "Por favor suministre los datos para completar el registro";
        }
    }
}

