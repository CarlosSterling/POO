<?php

class Personas{

public string $nombre;
public string $apellido;
public int $edad;

public function __construct(string $nombre, string $apellido, int $edad) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
}

public function saludar(){
    echo "Hola, me llamo {$this->nombre} {$this->apellido} y tengo {$this->edad} años"."\n";
}

}

trait A{
    public function responder(){
        echo "Hola, soy {$this->nombre} desde el trait A"."\n";
    }

}

trait B{
    public function responder(){
        echo "Hola, soy {$this->nombre} desde el trait B"."\n";
    }

}

class Aprendices extends Personas{

    use B;

    public function saludar(){
        echo "Hola {$this->nombre} desde la clase aprendices"."\n";
    }

}



class Tutores extends Personas{

    use A;

    public function saludar(){
        echo "Hola {$this->nombre} desde la clase tutores"."\n";
    }

  

}

$persona = new Personas("Alaia", "Sterling", 4);
$persona->saludar();

$tutor = new Tutores("Carlos", "Sterling", 32);
$tutor->saludar();
$tutor->responder();

$Aprendices = new Aprendices("Alaia", "Sterling", 4);
$Aprendices->saludar();
$Aprendices->responder();


trait nombreTrait{
    // funcionalidad
}


//En la clase que se desea implementar
use nombreTrait;