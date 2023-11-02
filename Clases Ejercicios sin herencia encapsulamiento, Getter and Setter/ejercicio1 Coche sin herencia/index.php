<?php
require_once "coche.php";

//fiat

$coche1 = new Coche("Fiat", "Mobi");

echo "<br>";
//volkswagen

$coche2 = new Coche("Volkswagen", "Vento");

echo "<br>";
//ford

$coche3 = new Coche("Ford", "Mustang ");

echo "<br>";

$coche1->informacion();
echo "<br>";
$coche2->informacion();
echo "<br>";
$coche3->informacion();








?>