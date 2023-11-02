<?php
require_once "persona.php";

$persona1 = new Persona("Sandra", "Segovich", -37);

echo "<br>";

$persona2 = new Persona("Maximo", "Okinawa", 17);

echo "<br>";

$persona3 = new Persona("Daniel", "Orange", -39);

echo "<br>";


$persona1->informacion();
$persona1->edadNegativa();
echo "<hr>";
$persona2->informacion();
$persona2->edadNegativa();
echo "<hr>";
$persona3->informacion();
$persona3->edadNegativa();



?>