<?php
require_once "coche.php";

//fiat

$coche1 = new Coche("Fiat", "Mobi", 2018);

echo "<br>";
//volkswagen

$coche2 = new Coche("Volkswagen", "Vento", 2022);

echo "<br>";
//ford

$coche3 = new Coche("Ford", "Mustang ", 2005);

echo "<br>";

$coche1->informacion();
echo "<br>";
$coche2->informacion();
echo "<br>";
$coche3->acelerar();







?>