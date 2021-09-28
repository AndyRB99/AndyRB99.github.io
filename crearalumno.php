<?php include("seguridad.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro de alumno</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="icon" href="favicon_io/favicon-32x32.png">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="css/style5.css">
</head>

<body>
  <div class="wrapper">
    <!-- Comienza el codigo del sidebar -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3 style="text-align: center;">Jardin de niños "Antonia Labastida"</h3>
      </div>
      <ul class="list-unstyled components">
        <p>Sistema de control escolar</p>
        <li class="active">
          <a href="listaalumnos.php">Alumnos</a>
        </li>
        <li>
          <a href="#">Docentes</a>
        </li>
        <li>
          <a href="#">Grupos</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
      </ul>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="mb-0" style="color: #FFFF;">© 2021. Jardin de niños "Antonia Labastida"</p>
            </div>
          </div>
        </div>
      </footer>
    </nav>
    <div id="content" style="min-width: 100vh;">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h2 class="mt-4">Crea un alumno</h2>
            <hr>
            <form method="post">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
              </div>
              <div class="form-group">
                <label for="apellidoP">Apellido Paterno</label>
                <input type="text" name="apellidoP" id="apellidoP" class="form-control">
              </div>
              <div class="form-group">
                <label for="apellidoM">Apellido Materno</label>
                <input type="text" name="apellidoM" id="apellidoM" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" name="edad" id="edad" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
                <a class="btn btn-primary" href="listaalumnos.php">Regresar</a>
              </div>
            </form>
          
        </div>
      </div>
      
    </div>
  </div>
</body>



</html>