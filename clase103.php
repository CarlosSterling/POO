<?php

abstract class ADSO103{

    //propiedades
    public string $nombre;
    public string $apellido;
    public int $edad;
    public string $genero;


//Metodos
public function __construct(string $nombre, string $apellido, int $edad, string $genero) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    $this->genero = $genero;
}

abstract public function mostrarDatos();
//abstract public function asignarCurso();
}

class Cursos extends ADSO103{
    public int $idCurso;
    public function __construct(string $nombre, string $apellido, int $edad, string $genero, int $idCurso){
            $this->idCurso = $idCurso;
            parent:: __construct($nombre, $apellido,$edad,$genero);
            
        }

        public function mostrarDatos(){
            echo " Hola, mi nombre es {$this->nombre} {$this->apellido}, y tengo {$this->edad} años, y soy de genero {$this->genero}\n";
        }

       public function asignarCurso(){
            echo "El aprendiz {$this->nombre} hace parte de la ficha con id {$this->idCurso}\n";
            
            }

    }

    


//instancias
$_mostrar = new Cursos("Maiber","Cordoba",19, "Masculino", 2846103);
$_mostrar->mostrarDatos();
$_mostrar->asignarCurso();

