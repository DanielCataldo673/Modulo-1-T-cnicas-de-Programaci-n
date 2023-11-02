<?php
require_once "libros.php";

$libros1 = new Libros("Don Quijote de la Mancha
", " Miguel de Cervantes Saavedra", 1560);

echo "<br>";

$libros2 = new Libros("Historia de dos ciudades", " Charles Dickens
", 616);

echo "<br>";


$libros1->titulo(); 
$libros1->autor(); 
$libros1->numero_de_paginas();
echo "<br>";
$libros2->titulo(); 
$libros2->autor(); 
$libros2->numero_de_paginas();


?>