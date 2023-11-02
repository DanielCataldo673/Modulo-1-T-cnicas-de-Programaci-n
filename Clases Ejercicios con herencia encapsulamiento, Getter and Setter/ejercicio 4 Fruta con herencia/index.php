<?php


require_once "manzana.php";
require_once "banana.php";



//Instanciar Clases Padre
$fruta = new Fruta("Frutilla", "Rojo.", "Camarosa", 3);

echo $fruta->Informacion();

echo "<br>";
//Instanciar la clase hija

$manzana  = new Manzana("Manzana", "Rojo", "Gala.", 10);

echo "<br>";

echo $manzana->Informacion();

echo "<br>";

echo $manzana->Tipo();

echo "<br>";

$banana = New Banana("Banana", "Amarillo", "El plátano de Canarias " , 16);

echo "<br>";

echo $banana->Informacion();

echo "<br>";

echo $banana->Longitud();



?>