<?php

require_once "conexion.php";

$id_registro_a_editar = $_POST['registro_id'];

//Verificar si sehizo click en el boton submit

if($_SERVER["REQUEST_METHOD"] === "POST"){

    //Obtener los datos editados del formlario

    $nuevo_registro = $_POST['nuevo_registro'];

    //Realizar consulta SQL para actualizar comentario

    $actualizar_query = "UPDATE empleados set seniority = ? WHERE id = ?";

    $stmt = mysqli_prepare($connect, $actualizar_query);

    if($stmt) {
        //vincular
        mysqli_stmt_bind_param($stmt, "si", $nuevo_registro, $id_registro_a_editar);

        if (mysqli_stmt_execute($stmt)) {
            echo "Registro actualizado correctamente";
            header('Location:mostrar.php');
        }else{
            echo "Error al actualizar el registro" . mysqli_error($connect);
        }

         mysqli_stmt_close($stmt);


    }

     mysqli_close($connect);



}








?>