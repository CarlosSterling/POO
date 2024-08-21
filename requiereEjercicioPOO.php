<?php

require_once  "ejercicioPOO.php";
require_once "ejercicioPooClaseExtendida.php";
require_once "polimorfismoEjercicioPOO.php";

$empleado1 = new EmpleadoTiempoCompleto("Yulian", "Aguirre", 60000);
mostrarDetallesEmpleado($empleado1)."\n";

$empleado2 = new EmpleadoMedioTiempo("Maiber", "Cordoba", 20000);
mostrarDetallesEmpleado($empleado2)."\n";

$empleado3 = new EmpleadoMedioTiempo("Jhon", "Pepicano", 200000);
mostrarDetallesEmpleado($empleado3)."\n";

$empleado4 = new EmpleadoTiempoCompleto("Juan Jose", "Manrrique", 150000);
mostrarDetallesEmpleado($empleado4)."\n";
