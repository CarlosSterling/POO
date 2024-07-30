<?php

class sistemaRegistro{

    public string $nombre;
    public string $apellido;
    public string $email;
    public string $password;

    public function __construct(string $nombre = '', string $apellido = '', string $email = '', string $password = '') {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->password = $password;

    }

    public function solicitarRegistro():void{
        $this->nombre =  strval(readline("Ingrese su nombre: "));
        $this->apellido =  strval(readline("Ingrese su Apellido: "));
        $this->email =  strval(readline("Ingrese su Email: "));
        $this->password =  strval(readline("Ingrese su contraseña: "));}

    public function registrarse(){
        if (!empty($this->nombre)&&!empty($this->apellido)&&!empty($this->email) && !empty($this->password)) {
            return "Hola " . $this->nombre . " " . $this->apellido . ", registro exitoso.";
        } else {
            return "Señor/a usuario, para registrarse por favor diligencie todos los campos.";

        }
    }
}

class inicioSesion extends sistemaRegistro{

    public function __construct(string $nombre = '', string $apellido = '', string $email = '', string $password = '') {
        parent::__construct($nombre, $apellido, $email, $password);
    }

    public function solicitarDatosInicioSesion(): void {
        $this->email = strval(readline("Ingrese su email: "));
        $this->password = strval(readline("Ingrese su contraseña: "));
    }
    public function iniciarSesion(): string {
        $email = strval(readline("Ingrese su email: "));
        $password = strval(readline("Ingrese su contraseña: "));

        if ($this->email === $email && $this->password === $password) {
            return "Inicio de sesión exitoso. Bienvenido " . $this->nombre . " " . $this->apellido;
        } else {
            return "Correo electrónico o contraseña incorrectos, verifica tus datos.";
        }
    }

}

function opcionaRealizar(){

    $opcion = intval(readline("Que desea realizar. 1. para registrarse. 2. Para iniciar sesion: "));
    if ($opcion === 1){
        $usuario = new sistemaRegistro();
        echo $usuario->solicitarRegistro();
        echo $usuario->registrarse();
    } elseif ($opcion === 2) {
        $usuario = new inicioSesion();
        $usuario->solicitarDatosInicioSesion();
        echo $usuario->iniciarSesion();
    } else {
        echo "Opción no válida.";
    }
}

opcionaRealizar();