<?php
require_once "empleado.php";



$empleado = new Empleado("Jairo Castillo", 350000, 580000);

echo "<br>";
$empleado->informacion();
echo "<br>";
$empleado->nuevoSueldo();









?>