<?php
require_once "libro.php";

$libro1 = new Libro("Don Quijote de la Mancha
", " Miguel de Cervantes Saavedra");

echo "<br>";

$libro2 = new Libro("Historia de dos ciudades", " Charles Dickens
");

echo "<br>";


$libro1->titulo(); 
$libro1->autor(); 
echo "<br>";
$libro2->titulo(); 
$libro2->autor(); 


?>