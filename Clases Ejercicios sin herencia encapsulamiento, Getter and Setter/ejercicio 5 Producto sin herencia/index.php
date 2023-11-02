<?php
require_once "producto.php";



$producto = new Producto("Jarra Electrica", 1800, 2500);

echo "<br>";
$producto->informacion();
echo "<br>";
$producto->nuevoPrecio();









?>