<?php
include 'includes/header.php';

//Adstracion
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
    
}
$empleado = new Empleado;

$empleado->nombre = "Daniel";
$empleado->apellido="Valeriano";

echo "<pre>";
var_dump($empleado);
echo "</pre>";
