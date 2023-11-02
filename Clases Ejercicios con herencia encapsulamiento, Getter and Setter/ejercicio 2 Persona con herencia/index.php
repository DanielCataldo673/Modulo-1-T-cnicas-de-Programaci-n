<?php


require_once "estudiante.php";
require_once "profesor.php";



//Instanciar Clases Padre
$persona = new Persona("Jaime", 47, 213456, "Geografia.");

echo $persona->Informacion();

echo "<br>";
//Instanciar la clase hija

$estudiante  = new Estudiante("Felipe", 65, 6512, "Gastronomia.");

echo "<br>";

echo $estudiante->Informacion();

echo "<br>";

echo $estudiante->Matricula();

echo "<br>";

$profesor = New Profesor("Sandra", 37, 241319, "Fotografia.");

echo "<br>";

echo $profesor->Informacion();

echo "<br>";

echo $profesor->Especialidad();



?>