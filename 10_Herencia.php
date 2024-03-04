<?php
include 'includes/header.php';

//Clase principal para la herencia
class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }
    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email; 
    }

    public function getTelefono()
    {
        return $this->telefono;
    }
}

// Heredando desde la clase principal Persona
class Empleado extends Persona {

    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono); //con parent:: Llama los datos que vas a traer desde la clase principal.
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}

class Proveedor extends Persona {
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email . " de la empresa: " . $this->empresa; 
    }
}

$empleado = new Empleado('Harrisson', 'Bernal',  'harrisson.bernal@gmail.com', 103091043140, 005, 'TI');
$proveedor = new Proveedor('Josue', 'Perez', "josue@empresa.com", 19030139, "TikTok");

echo "<pre>";
var_dump($empleado);
echo "</pre><br>";

echo "<pre>";
var_dump($proveedor);
echo "</pre><br>";

$empleado->mostrarInformacion();

echo "<br>";

$proveedor->mostrarInformacion();

echo "<br>";

echo $proveedor->getTelefono();