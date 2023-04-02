<?php
include 'includes/header.php';

//Constructor property promotion
class Empleado
{

    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo
    ) {}
}


$empleado = new Empleado('Daniel', "Valeriano", "No tengo", "daniel@gmail.com", 006);



echo "<pre>";
var_dump($empleado);
echo "</pre>";
