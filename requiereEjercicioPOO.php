<?php

require_once "ejercicioPOO.php";
require_once "ejercicioPooClaseExtendida.php";
require_once "polimorfismoEjercicioPOO.php";

$empleado1 = new EmpleadoTiempoCompleto("Tatiana", "Astudillo", 60000);
mostrarDetallesEmpleado($empleado1)."\n";

$empleado2 = new EmpleadoMedioTiempo("Yurgen", "Perdomo", 20000);
mostrarDetallesEmpleado($empleado2)."\n";

$empleado3 = new EmpleadoMedioTiempo("Maikel", "Melendez", 200000);
mostrarDetallesEmpleado($empleado3)."\n";

$empleado4 = new EmpleadoTiempoCompleto("Andres", "Triana", 150000);
mostrarDetallesEmpleado($empleado4)."\n";