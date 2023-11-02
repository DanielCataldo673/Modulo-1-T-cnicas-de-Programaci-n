<?php
require_once "perro.php";

echo "<br>";
$animal = new Animal("Pelusa", "Mestiza");
echo $animal->Saludar();
echo "<br>";
echo "<br>";
$perro = new Perro("Pituca", "Mestiza");
echo $perro->Saludar();
echo "<br>";
echo $perro->razaPerro();
?>