<?php

require_once "sistemaRegistro.php";

$registroUsuario1 = new sistemaRegistro(nombre:"Carlos", apellido:"Sterling", email:"carlos@gmail.com", password:"123456");
echo $registroUsuario1->registrarse()."\n";

$registroUsuario2 =new sistemaRegistro(nombre:"", apellido:"Sterling", email:"Alaia@gmail.com", password:"67890");
echo $registroUsuario2->registrarse ()."\n";

$inicioUsuario1 = new inicioSesion(nombre:"Carlos", apellido:"Sterling", email:"carlos@gmail.com", password:"123456");
echo $inicioUsuario1->iniciarSesion(email:"carlos@gmail.com", password:"123456")."\n";

$inicioUsuario2 = new inicioSesion(nombre:"Alaia", apellido:"Sterling", email:"alaia@gmail.com", password:"");
echo $inicioUsuario2->iniciarSesion(email:"alaia@gmail.com", password:"3456")."\n";

