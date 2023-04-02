<?php
include 'includes/header.php';

//Constructores

//Metodos
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre,$apellido,$departamento,$email,$codigo)
    {
        $this->nombre= $nombre;
        $this->apellido= $apellido;
        $this->departamento= $departamento;
        $this->email= $email;
        $this->codigo= $codigo;

    }
    public function nombreEmpleado()
    {
        echo $this->nombre ." " . $this->apellido;
    }
    public function departamentoEmpleado()
    {
        return $this->departamento;
    }
}


$empleado = new Empleado('Daniel',"Valeriano","No tengo","daniel@gmail.com",006);



echo "<pre>";
var_dump($empleado);
echo "</pre>";

$empleado->nombreEmpleado();

$departamento = $empleado->departamentoEmpleado();
echo $departamento;