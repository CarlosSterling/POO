<?php
trait Descuento
{
    public function calcularDescuento(float $porcentaje): float
    {
        return $this->precioBase * ($porcentaje / 100);
    }
}

trait Recargo
{
    public function calcularRecargo(float $porcentaje): float
    {
        return $this->precioBase * ($porcentaje / 100);
    }
}

abstract class Producto
{
    protected string $titulo;
    protected float $precioBase;

    public function __construct(string $titulo, float $precioBase)
    {
        $this->titulo = $titulo;
        $this->precioBase = $precioBase;
    }

    abstract public function getPrecio(): float;
    abstract public function getInfo(): string;

    public function getTitulo(): string
    {
        return $this->titulo;
    }
}

class Libro extends Producto
{
    use Descuento;

    private bool $esBestseller;

    public function __construct(string $titulo, float $precioBase, bool $esBestseller)
    {
        parent::__construct($titulo, $precioBase);
        $this->esBestseller = $esBestseller;
    }

    public function getPrecio(): float
    {
        $precioFinal = $this->precioBase;
        if ($this->esBestseller) {
            $descuento = $this->calcularDescuento(10);
            $precioFinal -= $descuento;
        }
        return $precioFinal;
    }

    public function getInfo(): string
    {
        return "Libro: {$this->titulo}, Precio: \${$this->getPrecio()}";
    }
}

class Revista extends Producto
{
    use Recargo;

    private bool $esEdicionEspecial;

    public function __construct(string $titulo, float $precioBase, bool $esEdicionEspecial)
    {
        parent::__construct($titulo, $precioBase);
        $this->esEdicionEspecial = $esEdicionEspecial;
    }

    public function getPrecio(): float
    {
        $precioFinal = $this->precioBase;
        if ($this->esEdicionEspecial) {
            $recargo = $this->calcularRecargo(15);
            $precioFinal += $recargo;
        }
        return $precioFinal;
    }

    public function getInfo(): string
    {
        return "Revista: {$this->titulo}, Precio: \${$this->getPrecio()}";
    }
}

class Periodico extends Producto
{
    public function getPrecio(): float
    {
        return $this->precioBase; // Precio fijo
    }

    public function getInfo(): string
    {
        return "Periódico: {$this->titulo}, Precio: \${$this->getPrecio()}";
    }
}

class Inventario
{
    private array $productos = [];

    public function agregarProducto(Producto $producto, int $cantidad): void
    {
        $this->productos[$producto->getTitulo()] = [
            'producto' => $producto,
            'cantidad' => $cantidad
        ];
    }

    public function quitarProducto(string $titulo, int $cantidad): bool
    {
        if (isset($this->productos[$titulo])) {
            if ($this->productos[$titulo]['cantidad'] >= $cantidad) {
                $this->productos[$titulo]['cantidad'] -= $cantidad;
                return true;
            }
        }
        return false;
    }

    public function consultarProducto(string $titulo): ?array
    {
        return $this->productos[$titulo] ?? null;
    }

    public function listarInventario(): void
    {
        foreach ($this->productos as $item) {
            echo $item['producto']->getInfo() . ", Cantidad: {$item['cantidad']}\n";
        }
    }
}

$inventario = new Inventario();

$libro1 = new Libro("La biblia del programadaro", 150000, true);
$revista1 = new Revista("PHP desde cero", 100000, false);
$periodico1 = new Periodico("La programacion es la carrera del futuro", 12000);

$inventario->agregarProducto($libro1, 10);
$inventario->agregarProducto($revista1, 5);
$inventario->agregarProducto($periodico1, 20);

$inventario->listarInventario();