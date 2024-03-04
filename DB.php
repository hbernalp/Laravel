<?php

//Clase que va a recibir los datos desde la clase 13
class DB {

    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function guardar() 
    {
        echo "Almacenando... " . $this->nombre;
    }
}
