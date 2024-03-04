<?php
include 'includes/header.php';

// Instanciar una Clase
class Empleado {

    
}

//Objeto creado = Instancia de la clase
//Se pueden tener varias instancias
$empleado = new Empleado;
$empleado2 = new Empleado;
$empleado3 = new Empleado;

//Obteniendo objetos de varias instancias de la misma clase
echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

echo "<pre>";
var_dump($empleado3);
echo "</pre>";