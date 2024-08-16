<?php

require_once 'class.articulo.php';

final class ArticuloRebajado extends Articulo {
    private $rebaja;

    public function __construct($pNombre, $pPrecio, $pRebaja) {
        parent::__construct($pNombre, $pPrecio);
        $this->rebaja = $pRebaja;
    }

    private function calculaDescuento() {
        return $this->precio * ($this->rebaja / 100);
    }

    public function precioRebajado() {
        return $this->precio - $this->calculaDescuento();
    }

    public function __toString() {
        $cadena = parent::__toString()."\n";
        $cadena .= 'La rebaja es: ' . $this->rebaja."\n";
        $cadena .= 'El descuento es: ' . $this->calculaDescuento();
        return $cadena;
    }
}

$articulo = new ArticuloRebajado('Bicicleta', 700000, 15);

echo $articulo."\n";
echo "El precio del artículo rebajado es " . $articulo->precioRebajado()."\n";
?>
