<?php
require_once "cuentabancaria.php";

$persona = new CuentaBancaria(0, 200, 180, 100);


$persona->saldoInicial();
echo "<br>";
echo "<br>";
$persona->depositar();
echo "<br>";
$persona->retirar();
echo "<br>";
$persona->saldo(); 

?>