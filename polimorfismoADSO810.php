<?php

 class adso810{

    public $nombre;
    public $apellido;
    public $curso;

    public function __construct($nombreAprendiz, $apellidoAprendiz, $cursoAprendiz) {
        $this->nombre = $nombreAprendiz;
        $this->apellido = $apellidoAprendiz;
        $this->curso = $cursoAprendiz;
    }
     public function mostrarDetalles(){}
}

class cursoPresencial extends adso810{

    public $ambiente;

    public function __construct($nombreAprendiz,$apellidoAprendiz,$cursoAprendiz,$ambienteFormacion) {
        parent::__construct($nombreAprendiz, $apellidoAprendiz, $cursoAprendiz);
        $this->ambiente=$ambienteFormacion;
       
    }

    public function mostrarDetalles(){
        return "Hola mi nombre es ".$this->nombre." pertenezco al curso " .$this->curso." que se dicta en el ambiente ".$this->ambiente."\n";
    }

}

class cursoVirtual extends adso810{

    public $plataforma;

    public function __construct($nombreAprendiz,$apellidoAprendiz,$cursoAprendiz,$plataforma) {
        parent::__construct($nombreAprendiz, $apellidoAprendiz, $cursoAprendiz);
        $this->plataforma=$plataforma;
       
    }

    public function mostrarDetalles(){
        return "Hola mi nombre es ".$this->nombre." pertenezco al curso " .$this->curso." que se dicta por medio de la plataforma ".$this->plataforma."\n";
    }

}

function obtenerDetallesAprendiz(adso810 $aprendiz) {
    echo $aprendiz->mostrarDetalles();
}

$estudiantePresencial = new cursoPresencial("Carlos", "Sterling", "PHP", "Y12");
obtenerDetallesAprendiz($estudiantePresencial);
$estudiantePresencial1 = new cursoPresencial("Luis", "Giron", "PHP", "Y12");
obtenerDetallesAprendiz($estudiantePresencial1);

$estudianteVirtual = new cursoVirtual("Andres", "Calderon", "CSS", "Meet");
obtenerDetallesAprendiz($estudianteVirtual);
$estudianteVirtual1 = new cursoVirtual("Estefani", "Escalante", "JAVA", "Zoom");
obtenerDetallesAprendiz($estudianteVirtual1);
