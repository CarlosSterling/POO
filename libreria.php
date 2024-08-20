<?php

declare(strict_types=1);

abstract class Producto {
    protected string $titulo;
    protected string $autor;
    protected float $precio;
    protected int $stock;
    private static int $totalProductos = 0;

    public function __construct(string $titulo, string $autor, float $precio, int $stock) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
        $this->stock = $stock;
        self::$totalProductos++;
    }

    // Métodos get y set para las propiedades
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function setAutor(string $autor): void {
        $this->autor = $autor;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function setPrecio(float $precio): void {
        $this->precio = $precio;
    }

    public function getStock(): int {
        return $this->stock;
    }

    public function setStock(int $stock): void {
        $this->stock = $stock;
    }

    // Método abstracto que debe ser implementado por las subclases
    abstract public function vender(): void;

    // Método estático para obtener el número total de productos
    public static function getTotalProductos(): int {
        return self::$totalProductos;
    }
}



class Libro extends Producto {
    public function vender(): void {
        if ($this->stock > 0) {
            $this->stock--;
            echo "El libro '{$this->titulo}' ha sido vendido. Quedan '{$this->stock}' en stock.\n";
        } else {
            echo "El libro '{$this->titulo}' está agotado.\n";
        }
    }
}
class Revista extends Producto {
    public function vender(): void {
        if ($this->stock > 0) {
            $this->stock--;
            echo "La revista '{$this->titulo}' ha sido vendida. Quedan {$this->stock} en stock.\n";
        } else {
            echo "La revista '{$this->titulo}' está agotada.\n";
        }
    }
}

class eBook extends Producto {
    public function vender(): void {
        echo "El eBook '{$this->titulo}' ha sido vendido. El stock no aplica para eBooks.\n";
    }
}


$libro1 = new Libro("El Principito", "Antoine de Saint-Exupéry", 15.99, 10);
$revista1 = new Revista("National Geographic", "Varios Autores", 5.99, 5);
$ebook1 = new eBook("Clean Code", "Robert C. Martin", 25.00, 0);


$libro1->vender(); 
$revista1->vender(); 
$ebook1->vender(); 

echo "Total de productos en la librería: " . Producto::getTotalProductos() . "\n";

