<?php

abstract class Aprendices {
    public string $nombre;
    public int $edad;
    public string $email;
    public float $promedio;

    public function __construct(string $nombre, int $edad, string $email, float $promedio) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
        $this->promedio = $promedio;
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

