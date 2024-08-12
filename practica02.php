<?php
class Menu {
  private $enlaces=array();
  private $titulos=array();

  public function cargarOpcion($enlace,$nombre)
  {
    $this->enlaces[]=$enlace;
    $this->titulos[]=$nombre;
  }
  public function mostrarHorizontal()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>'."\n";
    }
  }
  public function mostrarVertical()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>'."\n";
    }
  }
}

$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->mostrarVertical();
?>