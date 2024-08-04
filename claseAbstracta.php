<?php

abstract class Aprendices {
    public string $nombre;
    public int $edad;
    public string $email;
    public float $promedio;

    public function __construct(string $nombreAprendiz, int $edadAprendiz, string $emailAprendiz, float $promedioAprendiz) {
        $this->nombre = $nombreAprendiz;
        $this->edad = $edadAprendiz;
        $this->email = $emailAprendiz;
        $this->promedio = $promedioAprendiz;
    }

    abstract public function Aprender();
}

class Estudiante extends Aprendices {
    public function Aprender() {
        return "Mi nombre es " . $this->nombre . " tengo " . $this->edad . " años, mi correo es " . $this->email . " y tengo un promedio de " . $this->promedio;
    }
    
}


$estudiante = new Estudiante("Carlos", 32, "carlos@example.com", 8.5);
echo $estudiante->Aprender();

?>

