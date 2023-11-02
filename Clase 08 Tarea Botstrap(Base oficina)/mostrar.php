<?php
require_once "conexion.php";

// Consulta, despues se ejecuta y almacena

$query = "SELECT * FROM EMPLEADOS";


$resultado = mysqli_query($connect, $query);

//almacenar(devuelve la consulta de la bd convertida en un array)

$empleados = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mostrar Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- barra animada -->
    <p class="placeholder-wave">
        <span class="placeholder col-12" style="color: #A2678A;"></span>
    </p>
    <div class="container">
        <h2 class="text-center text-decoration-underline fst-italic">Registro de Empleados</h2>
        <div class="row mt-3">
            <table class="table table-dark table-striped">
                <tr>
                    <th>ID </th>
                    <th>Nombre </th>
                    <th>Apellido</th>
                    <th>DNI </th>
                    <th>Telefono </th>
                    <th>Rol </th>
                    <th>Señority </th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($empleados as $empleado) {  ?>
                    <tr>
                        <td> <?= $empleado["id"];  ?> </td>
                        <td> <?= $empleado["nombre"];  ?> </td>
                        <td> <?= $empleado["apellido"]; ?></td>
                        <td> <?= $empleado["dni"]; ?></td>
                        <td> <?= $empleado["telefono"]; ?> </td>
                        <td> <?= $empleado["rol"]; ?></td>
                        <td> <?= $empleado["seniority"]; ?> </td>
                        <td><a class="btn btn-outline-warning" href="editar.php?id=<?= $empleado["id"];?>">Editar</a></td>
                        <td><a onclick="return confirm('¿Estas seguro que quiere eliminar el registro?')" class="btn btn-outline-danger" href="eliminar.php?id=<?= $empleado["id"];?>">Eliminar</a></td>
                    </tr>

                <?php } ?>
            </table>

        </div>
    </div>

    <!-- barra animada -->
    <p class="placeholder-wave">
        <span class="placeholder col-12" style="color: #A2678A;"></span>
    </p>
<!-- Home-->
<div class=" d-flex flex-column justify-content-center align-items-center mt-3">
    <a href="index.php"><img class="" height="150px" width="150px" src="img/boton3.webp"></a>
  </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>