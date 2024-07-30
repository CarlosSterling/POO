<?php
require_once "empleadosAlmacen.php";
require_once "inicioSesionEmpleados.php";

function elegirOpcion(){
    $opcion = intval(readline("Ingrese 1. para registrar usuario y 2. para iniciar sesion en el sistema: "));
    if ($opcion === 1) {
        $nuevoUsuario = new Almacen();
        $nuevoUsuario->solicitarDatosParaRegistro();
        echo $nuevoUsuario->registrarUsuario();
    } elseif ($opcion === 2) {
        $nuevaSesion = new InicioSesion();
        $nuevaSesion->solicitarDatosIngreso();
        echo $nuevaSesion ->iniciarSesion();
    }else{ 
        echo "Opción no válida.";
    }
    
}

elegirOpcion();