<?php
include 'includes/header.php';

// Modificadores de acceso
class Empleado { 

    // Public, acceso en cualquier lugar (clase u objeto)
    // protected, acceso en la clase -> no puede modificarce en la instancia


    // Modificadores public, private, protected
    protected $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }
    public function cambiarNombre($nombre) //Forma de cambiar el modificador protected
    {
        $this->nombre = $nombre;
    }
}

$juan = new Empleado('Harrisson', 'Bernal', 'TI', 'juan@empresa.com', 006);

$juan->cambiarNombre("Un Nuevo Nombre");

echo $juan->obtenerNombre();

echo "<pre>";
var_dump($juan);
echo "</pre><br>";