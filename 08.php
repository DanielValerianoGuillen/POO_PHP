<?php
include 'includes/header.php';

// Modificadores de acceso
class Empleado { 

    // Public, acceso en cualquier lugar (clase u objeto)
    // protected, acceso en la clase
    // public, private, protected

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
    public function cambiarNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}

$daniel = new Empleado('daniel', 'valeriano', 'TI', 'daniel@empresa.com', 006);

$daniel->cambiarNombre("Un Nuevo Nombre");

echo $daniel->obtenerNombre();

echo "<pre>";
var_dump($daniel);
echo "</pre><br>";