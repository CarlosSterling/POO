<?php

require_once "colombia.php";
$Huila = new Colombia(nombreDepartamento:"Huila", ubicacionDepartamento:"Sur",acentoDepartamento:"Opita");
echo $Huila->mostrarinformacion()."\n";

$Cali = new Colombia (ubicacionDepartamento:"SurOriente", nombreDepartamento:"Cali", acentoDepartamento:"Valluno");
echo $Cali->mostrarinformacion()."\n";

$Cali =new ComidadTipicas(ubicacionDepartamento:"SurOriente", nombreDepartamento:"Cali", acentoDepartamento:"Valluno", nombreDelPlato:"Chuleta Valluna", valorDelPlato:25000);
echo $Cali->comer()."\n";

$Medellin = new Colombia(acentoDepartamento:"Paisa", ubicacionDepartamento:"Norocidente", nombreDepartamento:"Medellin");
echo $Medellin->mostrarinformacion()."\n";

//llamado clase hija

$Huila = new ComidadTipicas(nombreDepartamento:"Huila", ubicacionDepartamento:"Sur", acentoDepartamento:"Opita", nombreDelPlato:"Asado Huilense", valorDelPlato:30000);
echo $Huila->comer()."\n";


$plato = new ComidadTipicas(nombreDepartamento: "Antioquia", ubicacionDepartamento: "Noroeste",acentoDepartamento: "Paisita",nombreDelPlato: "Bandeja Paisa",
    valorDelPlato: 30000);
echo $plato->comer();


