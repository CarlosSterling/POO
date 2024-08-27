<?php

class Aprendices{

    public function Saludar(){
        echo " Hola desde la clase base\n";
    }
}

trait saludar{
    public function Saludar(){
        echo " Hola desde el traits\n";
    }
}

trait Despedirse{
    public function despedirse(){
        echo "Chao desde el traits.\n";
    }
}

class ADSO810 extends Aprendices{

    use saludar, despedirse;

    public function Saludar(){
        echo "Hola desde el ADSO810.\n";
    }
    public function despedirse(){
        echo "Chao desde la clase ADSO810.\n";
    }

}

$aprendiz = new ADSO810();
 $aprendiz -> saludar();
 $aprendiz->despedirse();
