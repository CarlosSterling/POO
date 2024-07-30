<?php

require_once ("empleados.php");

$laura = new Empleados ("Tatian", 34,"Angela", 18);
echo $laura->saludar()."\n";

$Claudia = new Empleados(nombreEmpleado:"Jayi",edadEmpleado:46, compraDelCliente:16,cliente:"Luis");
echo $Claudia->saludar()."\n";

$nuevaCompra = new Empleados(cliente:"Luis",compraDelCliente:46,nombreEmpleado:"Jayi", edadEmpleado:19);
echo $nuevaCompra ->cobrar();

$datos = new datos(cliente:"Luis",compraDelCliente:46,nombreEmpleado:"Jayi", edadEmpleado:19,salarioCliente:1000);
echo $datos-> mostrarDatos();

