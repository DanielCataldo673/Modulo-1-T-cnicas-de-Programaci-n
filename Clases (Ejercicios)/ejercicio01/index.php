<?php
require_once "persona.php";

$persona1 = new Persona("Sandra", 37, "Nono", 1145639856);

echo "<br>";

$persona2 = new Persona("Maximo", 17, "Tokio", 1145631236);

echo "<br>";

$persona3 = new Persona("Daniel", 39, "Nono", 1145631245);

echo "<br>";


$persona1->informacion();
echo "<br>";
$persona2->informacion();
echo "<br>";
$persona3->informacion();


?>