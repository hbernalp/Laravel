<?php
include 'includes/header.php';

// Tipado

class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    //El tipado es la forma de asignar el tipo de dato que captura la variable
    public function __construct(string $nombre, string $apellido, string $departamento, string $email, $codigo)
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