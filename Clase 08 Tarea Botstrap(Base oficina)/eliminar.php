<?php
require_once "conexion.php";



$id_eliminar = $_GET["id"];


$consulta = "DELETE FROM empleados WHERE id = ?";

$stmt = mysqli_prepare($connect, $consulta);

if ($stmt) {
    //vinculamos
    mysqli_stmt_bind_param($stmt, "i", $id_eliminar);

    //Ejecutar la sentencia preparada

    mysqli_stmt_execute($stmt);

    //Cerrar la sentencia preparada

    mysqli_stmt_close($stmt);

    header('Location:mostrar.php');

}
 mysqli_close($connect);




?>