<?php
//Conexion conla base de datos

$bd_host= "localhost"; //se guarda el nombre del servidor de la base de datos

$bd_user= "root"; // se guarda el nombre de usuario de la base de datos

$bd_password=""; // se guarda la contraseña de la base de datos

$bd_name= "oficina"; //Nombre de la base de datos

$connect = mysqli_connect($bd_host, $bd_user, $bd_password, $bd_name);
//sirve para conectar php con mysql (controlador)









?>