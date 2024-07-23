    <?php

class Saiyajin {

    public $nombre = "Vegueta";
    public $nivelDePelea = 1000;

    public function Saludar(){
        return "Hola soy ".$this->nombre;
    }

    public function NivelDePelea(){
        return $this -> nombre." Tiene un nivel de pelea de " . $this->niVelDePelea;
    }

}
$vegueta = new Saiyajin();
echo $vegueta -> Saludar();