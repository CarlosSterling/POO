<?php

class Colombia {

    public string $nombreDepartamento;
    public string $ubicacionDepartamento;
    public string $acentoDepartamento;

public function __construct(
     string $nombreDepartamento,
     string $ubicacionDepartamento,
     string $acentoDepartamento
    ){

        $this->nombreDepartamento = $nombreDepartamento;
        $this->ubicacionDepartamento = $ubicacionDepartamento;
        $this->acentoDepartamento = $acentoDepartamento;

    }

public function mostrarinformacion(): string {
    return "el ".$this->nombreDepartamento. " se encuenta ubicado en la zona ".$this->ubicacionDepartamento. " y su acento es el ".$this->acentoDepartamento;
}
}

class ComidadTipicas extends Colombia{

    public string $nombreDelPlato;
    public int $valorDelPlato;

    public function __construct(
        string $nombreDepartamento,
        string $ubicacionDepartamento,
        string $acentoDepartamento,
        string $nombreDelPlato,
        int $valorDelPlato
        ){
            parent::__construct($nombreDepartamento,$ubicacionDepartamento,$acentoDepartamento);
            $this->nombreDelPlato = $nombreDelPlato;
            $this->valorDelPlato = $valorDelPlato;
        }
    

public function comer ():string{

return " En el departamento del ".$this->nombreDepartamento." se come ".$this->nombreDelPlato." y el costo oscila en los ".$this->valorDelPlato;
}

}
