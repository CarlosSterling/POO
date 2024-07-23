<?php

class Estudiante {
    // Propiedades
    public string $nombre;
    public int $edad;
    public string $curso;
    public float $promedio;

    // Métodos

    // Establecer el nombre del estudiante
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    // Obtener el nombre del estudiante
    public function getNombre(): string {
        return $this->nombre;
    }

    // Establecer la edad del estudiante
    public function setEdad(int $edad) {
        $this->edad = $edad;
    }

    // Obtener la edad del estudiante
    public function getEdad(): int {
        return $this->edad;
    }

    // Establecer el curso del estudiante
    public function setCurso(string $curso) {
        $this->curso = $curso;
    }

    // Obtener el curso del estudiante
    public function getCurso(): string {
        return $this->curso;
    }

    // Establecer el promedio del estudiante
    public function setPromedio(float $promedio) {
        $this->promedio = $promedio;
    }

    // Obtener el promedio del estudiante
    public function getPromedio(): float {
        return $this->promedio;
    }

    // Mostrar información del estudiante
    public function mostrarInformacion() {
        echo "Nombre: " . $this->getNombre() . "\n";
        echo "Edad: " . $this->getEdad() . "\n";
        echo "Curso: " . $this->getCurso() . "\n";
        echo "Promedio: " . $this->getPromedio() . "\n";
    }
}

// Creación de objetos de la clase Estudiante

$estudiante1 = new Estudiante();
$estudiante1->setNombre("Juan Pérez");
$estudiante1->setEdad(20);
$estudiante1->setCurso("Ingeniería Informática");
$estudiante1->setPromedio(8.5);

$estudiante2 = new Estudiante();
$estudiante2->setNombre("María García");
$estudiante2->setEdad(22);
$estudiante2->setCurso("Medicina");
$estudiante2->setPromedio(9.2);

// Mostrar información de los estudiantes
echo "Información del Estudiante 1:\n";
$estudiante1->mostrarInformacion();

echo "\nInformación del Estudiante 2:\n";
$estudiante2->mostrarInformacion();

?>
