<?php
require_once"herencia.php";

$Leon = new Animales(claseAnimal:"Leon",nombre:"Alex");
echo $Leon->ObtenerInformacion()."\n";

$Zorro = new Animales(nombre:"Fox",claseAnimal:"Zorro");
echo $Zorro->ObtenerInformacion()."\n";

$Perro = new Domesticos(nombre:"Lucas",claseAnimal:"Perro");
echo $Perro->ObtenerInformacion()."\n";
echo $Perro->Clasificacion()."\n";

$Gato = new Domesticos(claseAnimal:"Gato",nombre:"Manchas");
echo $Gato->ObtenerInformacion()."\n";