<?php

require_once "conexion.php";


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$telefono = $_POST["telefono"];
$rol = $_POST["rol"];
$seniority = $_POST["seniority"];

echo "<br>";
echo "<h2> Nuevos Datos Ingresados </h2>";
echo "<p> Nombre Ingresado: $nombre </p>";
echo "<p> Apellido Ingresado: $apellido </p>";
echo "<p> El DNI Ingresado: $dni </p>";
echo "<p> El Telefono Ingresado: $telefono </p>";
echo "<p> Rol en la Empresa Ingresado: $rol </p>";
echo "<p> Señority en la Empresa Ingresado: $seniority </p>";

//Vamos a insertar lo datos


//query(consulta)
$insertar = "INSERT INTO empleados(nombre,apellido,dni,telefono,rol,seniority)
VALUES (?,?,?,?,?,?)";
//Preparando la sentencia
$stmt = mysqli_prepare($connect, $insertar);

//Comprbar si existe la sentencia preeparada(ejecutar)

if($stmt){

    //vincular las variables a los marcadores de posicion

    //se pasa en parametros si son string : s
    //si son numeros enteros : i
    //si son numeros decimales : d
    mysqli_stmt_bind_param($stmt, "ssiiss", $nombre, $apellido, $dni, $telefono, $rol, $seniority);

    //Ejecutar la sentencia preparada

    mysqli_stmt_execute($stmt);

    //Cerrar la sentencia preparada

    mysqli_stmt_close($stmt);


}

mysqli_close($connect);









?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="text-center">
    <img class="mx-auto d-block mt-4 rounded-pill mt-3 border border-dark-subtle" height="350px" width="700px" src="img/seguridad2.webp" alt="">
    <p class="text-center  fst-italic fw-bold fs-2 mt-4 ">¡Gracias!<br>Los datos se actualizaron correctamente.</p>
    <a href="index.php"><img class="btn btn-outline-light mx-auto d-block " height="100px" width="100px" src="img/seguridad.jpg"></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <div class="d-flex justify-content-end">
        <a class=""><img class="btn btn-outline-light me-auto" onClick="history.go(-1)" height="50px" width="50px" src="img/volver atras.jpg"></a>
    </div>
</body>

</html>