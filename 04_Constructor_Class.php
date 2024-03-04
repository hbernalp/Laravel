<?php
include 'includes/header.php';

//Atributos en una clase con un cosntructor
//Un constructor es una funcion que va creando los atributos
//con sus instancias en cada clase

class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> departamento = $departamento;
        $this -> email = $email;
        $this -> codigo = $codigo;

    }

    
}

$hbp = new Empleado('Harrisson', 'Bernal', 'TI', 'harrisson.bernal@gmail.com', 1001);
$lilo = new Empleado('Olga Liliana', 'Prieto Camelo', 'Admin', 'olga.prieto2@gmail.com', 1002);



//Permite ver el objeto en pantalla, con su resultado en ejecucion.
echo "<pre>";
var_dump($hbp);
echo "</pre>";

echo "<pre>";
var_dump($lilo);
echo "</pre>";