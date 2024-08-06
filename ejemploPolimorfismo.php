<?php
abstract class adso810
{
    public $nombre;
    public $apellido;
    public $curso;

    public function __construct($nombreAprendiz, $apellidoAprendiz, $cursoAprendiz)
    {
        $this->nombre = $nombreAprendiz;
        $this->apellido = $apellidoAprendiz;
        $this->curso = $cursoAprendiz;
    }
    abstract public function obtenerDetalles();
}
class EstudiantePresencial extends Adso810
{
    public $Ambiente;

    public function __construct($nombreAprendiz, $apellidoAprendiz, $cursoAprendiz, $Ambiente)
    {
        parent::__construct($nombreAprendiz, $apellidoAprendiz, $cursoAprendiz);
        $this->Ambiente = $Ambiente;
    }

    public function obtenerDetalles()
    {
        return "Estudiante Presencial: $this->nombre $this->apellido, Curso: $this->curso, Ambiente: $this->Ambiente \n";
    }
}

class estudianteVirtual extends adso810
{
    public $plataforma;

    public function __construct($nombreAprendiz, $apellidoAprendiz, $cursoAprendiz, $plataforma)
    {
        parent::__construct($nombreAprendiz, $apellidoAprendiz, $cursoAprendiz);
        $this->plataforma = $plataforma;
    }


    public function obtenerDetalles()
    {
        return "Estudiante Presencial: $this->nombre $this->apellido, Curso: $this->curso, Plataforma: $this->plataforma\n";
    }
}

function mostrarDetallesEstudiante(adso810 $estudiante)
{
    echo $estudiante->obtenerDetalles();
}

$estudiantePresencial = new EstudiantePresencial("Carlos", "Sterling", "PHP", "Y12");
mostrarDetallesEstudiante($estudiantePresencial);

$estudianteVirtual = new estudianteVirtual("Andres", "Calderon", "CSS", "Meet");
mostrarDetallesEstudiante($estudianteVirtual);
