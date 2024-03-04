<?php
include 'includes/header.php';

//Atributos de una clase
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    
}

$empleado = new Empleado;

//Entrando a los atributos de la classe
$empleado -> nombre = "Harrisson";
$empleado -> apellido = "Bernal";


echo "<pre>";
var_dump($empleado);
echo "</pre>";

$empleado2 = new Empleado;

//Entrando a los atributos de la classe
$empleado2 -> nombre = "Liliana";
$empleado2 -> apellido = "Prieto";


echo "<pre>";
var_dump($empleado2);
echo "</pre>";
