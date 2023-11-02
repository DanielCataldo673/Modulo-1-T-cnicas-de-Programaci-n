<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<!-- Alta a los empleados 
Crear un CRUD de una oficina de empleados, donde los empleados van a tener id, nombre, apellido, DNI, telefono, rol, Señority (junior, semi-senior, senior), este ultimo es el que editar. -->
  <!-- barra animada -->

  <div>
  <p class="placeholder-wave">
      <span class="placeholder col-12" style="color: #A2678A;"></span>
    </p>
  </div>
  <div class="col-6 d-flex justify-content-center align-items-center mx-auto fst-italic form-control-lg" style="background-color: #A2678A;"><!-- sticky-bottom /botones fijos -->
      <span class="ps-3"><strong> Click aquí para para mostrar todos los comentarios</strong></span>
      
      <a class="btn btn-outline-dark btn-lg ms-2" href="mostrar.php">Mostrar</a>
      
    </div>
  
  <div class="row mt-3">
    <form class="col-6 mx-auto p-5" action="guardar.php" method="POST" style="background-color: #A2678A;">
      <h1 class="text-center text-decoration-underline fst-italic">Alta de Empleados</h1>
      <label class="mt-3" for="nombre">Nombre</label>
      <input type="text" class="form-control form-control-lg mb-2 bg-luz" name="nombre" placeholder="Ingrese aquí su Nombre" aria-label="Nombre">
      <br>
      <label for="apellido">Apellido</label>
      <input type="text" class="form-control form-control-lg bg-luz" name="apellido" placeholder="Ingrese aquí su Apellido" aria-label="Apellido">
      <br>
      <label for="dni">DNI</label>
      <input type="number" class="form-control form-control-lg bg-luz" name="dni" placeholder="Ingrese aquí su DNI" aria-label="DNI">

      <br>
      <label for="telefono">Telefono</label>
      <input type="number" class="form-control form-control-lg bg-luz" name="telefono" placeholder="Ingrese aquí su Telefono" aria-label="Telefono">
      <br>
      <label class="mt-3" for="rol">Rol</label>
      <input type="text" class="form-control form-control-lg mb-2 bg-luz" name="rol" placeholder="Ingrese aquí su Rol en la empresa" aria-label="Rol">
      <br>
      <label for="seniority">Señority</label>
      <input type="text" class="form-control form-control-lg bg-luz" name="seniority" placeholder="Ingrese aquí su Estatus en la empresa" aria-label="Seniority">
      <br>
      <div class=" d-flex flex-column justify-content-center align-items-center">
        <input class="bg-dark text-white btn btn-lg" type="submit" value="Ingresar">
      </div>
    </form>
    <br>
    <div class=" d-flex flex-column justify-content-center align-items-center mt-3">
      <img class="" height="70px" width="70px" src="img/emoticon2.jpg">
    </div>
    
    <marquee behaviour="scroll" scrolldelay="" class="text-dark mt-4 fst-italic" style="background-color:#A2678A" loop="">Todos los derechos reservados - C.f.P 20 (Programación) - 2023 - Colegiales - Argentina</marquee>
    <!-- barra animada -->
    <p class="placeholder-wave">
      <span class="placeholder col-12" style="color: #A2678A;"></span>
    </p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>