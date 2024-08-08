<?php
interface municipioProveniente{
  public function saludar();

}
 class adso810
{

    public $nombre;
    public $apellido;
    public $municipio;

    public function __construct($nombreAprendiz, $apellidoAprendiz, $municipioAprendiz)
    {
        $this->nombre = $nombreAprendiz;
        $this->apellido = $apellidoAprendiz;
        $this->municipio = $municipioAprendiz;
    }
   
}

class saladoBlanco extends adso810 implements municipioProveniente
{
    public $edad;

    public function __construct($nombreAprendiz, $apellidoAprendiz, $municipioAprendiz, $edadAprendiz) {
        $this->edad= $edadAprendiz;
        parent:: __construct($nombreAprendiz, $apellidoAprendiz, $municipioAprendiz);
    }
    public function saludar()
    {
        echo "Me llamo " . $this->nombre . " y soy del municipio de " . $this->municipio." Tengo ".$this->edad." años". "\n";
    }

    public function saludarGrupo()
    {
        echo "Hola a todos! ";
        $this->saludar();
    }
}

class sanAgustin extends adso810 implements municipioProveniente{

    public $mascota;

    public function __construct($nombreAprendiz, $apellidoAprendiz, $municipioAprendiz, $mascota) {
        $this->mascota = $mascota;
        parent:: __construct($nombreAprendiz, $apellidoAprendiz, $municipioAprendiz);
    }
    public function saludar(){
        echo "Hola mi nombre es ".$this->nombre." y vengo del muicipio de ".$this->municipio." y tengo un " .$this->mascota."\n";
    }
    public function saludarGrupo()
    {
        echo "Quiubo! ";
        $this->saludar();
    }
}

$luis = new saladoBlanco("Luis", "Giron", "Salado Blanco",18);
$luis->saludar();
$luis->saludarGrupo();

$maria = new sanAgustin("Maria", "Rico", "San Agustin", "Perro");
$maria-> Saludar();
$maria->saludarGrupo();

