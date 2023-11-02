<?php

require_once "conexion.php";

$id_registro_editar = $_GET["id"];


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Editar</title>
</head>

<body>
  <h1 class="ms-3 text-center text-decoration-underline fst-italic">Editar</h1>
  <div class="row mt-3">
    <form class="col-6 mx-auto p-5" action="editar_registro.php" method="POST">
      <input type="hidden" name="registro_id" value="<?= $id_registro_editar; ?>">

      <label for="registro" class="col-form-label text-center fs-4"><strong>Registro</strong></label>

      <div class="row g-2">

        <div class="col-md">

        
          <div class="form-floating">
            <input type="text" name="nuevo_registro" class="form-control" id="floatingPassword" placeholder="Ingrese aquí su Señority en la empresa" required>
            <label for="floatingPassword">Señority</label>
          </div>
        </div>
      </div>

      <br>
      <div class=" d-flex flex-column justify-content-center align-items-center">
        <input class="ms-3 bg-dark text-white" type="submit" value="Editar Registro">
      </div>

  </div>




  </form>
  <!-- Home-->
  <div class=" d-flex flex-column justify-content-center align-items-center mt-3">
    <a href="index.php"><img class="" height="50px" width="50px" src="img/emogis.jpg"></a>
  </div>
  <div class="d-flex justify-content-between"><!-- sticky-bottom /botones fijos -->
    <!-- Pagina anterior -->
    <a class=""><img class="btn btn-outline-light me-auto d-block" onClick="history.go(-1)" height="50px" width="50px" src="img/volver atras.jpg"></a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>