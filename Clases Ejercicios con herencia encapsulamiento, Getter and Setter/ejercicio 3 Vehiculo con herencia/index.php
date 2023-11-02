<?php


require_once "coche.php";
require_once "motocicleta.php";



//Instanciar Clases Padre
$vehículo = new Vehículo("Fiat", "Duna", 4, 1300);

echo $vehículo->Informacion();

echo "<br>";
//Instanciar la clase hija

$coche  = new Coche("Honda", "Civic", 4, 1996);

echo "<br>";

echo $coche->Informacion();

echo "<br>";

echo $coche->numeroPuertas();

echo "<br>";

$motocicleta = New Motocicleta("Gilera", "Smash", 0 , 107);

echo "<br>";

echo $motocicleta->Informacion();

echo "<br>";

echo $motocicleta->Cilindrada();



?>