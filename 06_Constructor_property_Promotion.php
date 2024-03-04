<?php
include 'includes/header.php';

//Constructor Property Promotion

class Empleado {
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
        ){}
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