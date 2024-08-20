<?php

class MiClase {
    public static $miPropiedadEstatica = "Carlos"; //Propiedad estatica
}



class SegundaClase extends MiClase{
    public static function miMetodoEstatico(){ //Método estatico
        return "Hola ". self::$miPropiedadEstatica;
    }
}

echo MiClase::$miPropiedadEstatica."\n";


echo SegundaClase::miMetodoEstatico();

