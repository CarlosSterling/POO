<?php

class Aprendices810{

static private string $nombre = "Andres";
static private string $apellido = "Astudillo";
static private int $edad = 18;

public static function getNombre(){
    return self::$nombre;
}

public static function getApellido(){
    return self::$apellido;
}

public static function getEdad(){
    return self::$edad;
}

public static function setNombre(string $nuevoNombre) {
    self::$nombre = $nuevoNombre;
}

public static function setApellido(string $nuevoApellido){
    self::$apellido = $nuevoApellido;
}

public static function setEdad(int $nuevaEdad) {
    self::$edad = $nuevaEdad;
}

public static function saludar(){
    return self::getNombre() . " ".self::getApellido(). " tiene ".self::getEdad(). " años"."\n";
}
}

class cursoVirtual extends Aprendices810{

    public static function aprender(){

        return "La aprendiz ". self::getNombre(). " esta en el curso de JAVA"."\n";

    }
}

class  cursoPresencial extends Aprendices810{

    public static function aprender(){
        self::setNombre("Carlos");
        return "El aprendiz " . self::getNombre() . " está en el curso de TypeScript\n";
    }
}

echo Aprendices810::Saludar();
echo cursoVirtual::aprender();
echo cursoPresencial::aprender();








