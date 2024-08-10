<?php

require_once "ejercicioPOO.php";
require_once "ejercicioPooClaseExtendida.php";
require_once "polimorfismoEjercicioPOO.php";

$empleado1 = new EmpleadoTiempoCompleto("Carlos", "Sterling", 50000);
mostrarDetallesEmpleado($empleado1)."\n";

$empleado2 = new EmpleadoMedioTiempo("Andres", "Calderon", 20000);
mostrarDetallesEmpleado($empleado2)."\n";

$empleado3 = new EmpleadoMedioTiempo("Alaia", "Sterling", 200000);
mostrarDetallesEmpleado($empleado3)."\n";

$empleado4 = new EmpleadoTiempoCompleto("Alaia", "Sterling", 150000);
mostrarDetallesEmpleado($empleado4)."\n";