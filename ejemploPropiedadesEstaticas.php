<?php
class Persona{
    public $nombre = "Carlos";
    public $apellido;
    public static $tipoSangre = "A-";
}

echo Persona:: $tipoSangre."\n";

Persona::$tipoSangre = "O+";
echo Persona::$tipoSangre."\n";

$p = new Persona();
$p->nombre = "Andrés";
echo $p->nombre."\n";