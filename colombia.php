<?php

class Colombia {

public function __construct(
    public string $nombreDepartamento,
    public string $ubicacionDepartamento,
    public string $acentoDepartamento
    ){}

public function mostrarinformacion(): string {
    return "el ".$this->nombreDepartamento. " se encuenta ubicado en la zona ".$this->ubicacionDepartamento. " y su acento es el ".$this->acentoDepartamento;
}
}

class ComidadTipicas extends Colombia{

    public function __construct(
        public string $nombreDepartamento,
        public string $ubicacionDepartamento,
        public string $acentoDepartamento,
        public string $nombreDelPlato,
        public int $valorDelPlato
        ){
            parent::__construct($nombreDepartamento,$ubicacionDepartamento,$acentoDepartamento);
        }



public function comer (){

return " En el departamento del ".$this->nombreDepartamento." se come ".$this->nombreDelPlato." y el costo oscila en los ".$this->valorDelPlato;
}
}

