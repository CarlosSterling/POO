    <?php

class Saiyajin {

    public $nombre = "Vegeta";
    public $nivelDePelea = 1000;

    public function Saludar(){
        return "Hola soy ".$this->nombre;
    }

    public function NivelDePelea(){
        return $this -> nombre." Tiene un nivel de pelea de " . $this->nivelDePelea;
    }

}
$vegueta = new Saiyajin();
echo $vegeta -> Saludar();