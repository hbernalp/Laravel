<?php
include 'includes/header.php';

//Metodos - Los metodos son funciones que van dentro de una clase

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

    //Creando el Metodo
    public function nombreEmpleado()
    {
        echo $this -> nombre . " " . $this -> apellido;
    }

    //Llamando el dato de un metodo
    public function departamentoEmpleado()
    {
        return $this -> departamento;
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

echo $hbp -> nombreEmpleado() ;
echo $lilo -> nombreEmpleado();

$dpto = $hbp -> departamentoEmpleado();
echo $dpto;