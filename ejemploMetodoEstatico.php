<?php
class CursosADSO810{

    public static $nombre = "Carlos";

    public static function saludar(){
        return "Hola ".self::$nombre;
    }
}
    echo CursosADSO810::saludar();

