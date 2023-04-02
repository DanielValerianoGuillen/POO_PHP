<?php
include 'includes/header.php';

//Getters y setter
class Empleado { 

    // Public, acceso en cualquier lugar (clase u objeto)
    // protected, acceso en la clase
    // public, private, protected

    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    /*
        Get- Para obtener un valor
        Set-Para modificar un valor
    */


    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}

$daniel = new Empleado('daniel', 'valeriano', 'TI', 'daniel@empresa.com', 006);



echo $daniel->getNombre();

