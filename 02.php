<?php
include 'includes/header.php';

//Instanciar una clase
class Empleado {
    
}
// Multiples instancia de una misma clase
$empleado = new Empleado;
$empleado2 = new Empleado;
$empleado3 = new Empleado;


echo "<pre>";

var_dump($empleado);

echo "</pre>";
