<?php
require_once "empleado.php";


$empleado1 = new Empleado("Juan", 250000, "19 de marzo del 2020");

echo "<br>";

$empleado2 = new Empleado("Raul", 380000, "4 de abril de 1998");

echo "<br>";

$empleado3 = new Empleado("Penelope", 865000, "25 de mayo del 2021");

echo "<br>";

$empleado1->informacion();
$empleado1->salario_anual();
$empleado1->darAumento(20);
echo "<hr>";

$empleado2->informacion();
$empleado2->salario_anual();
$empleado2->darAumento(15);
echo "<hr>";

$empleado3->informacion();
$empleado3->salario_anual();
$empleado3->darAumento(10);







?>