<?php
include 'seguridad.php';
include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

$error = false;
include("connbd.php");

try {

  if (isset($_POST['apellido'])) {
    $consultaSQL = "SELECT * FROM alumnos WHERE apellido LIKE '%" . $_POST['apellido'] . "%'";
  } else {
    $consultaSQL = "SELECT * FROM alumnos";
  }

  $sentencia = $conn->prepare($consultaSQL);
  $sentencia->execute();

  $alumnos = $sentencia->fetchAll();
} catch (PDOException $error) {
  $error = $error->getMessage();
}

$titulo = isset($_POST['apellido']) ? 'Lista de alumnos (' . $_POST['apellido'] . ')' : 'Lista de alumnos';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Lista de alumnos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="css/style5.css">
</head>

<body>
  <!-- Comienza el codigo del sidebar -->
  <div class="wrapper">
    <!-- Sidebar Holder -->
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
    </nav>

    <?php
    if ($error) {
    ?>
      <div class="container mt-2">
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
              <?= $error ?>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  <div id="content">
    
  </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a href="crearalumno.php" class="btn btn-primary mt-4">Crear alumno</a>
          <hr>
          <form method="post" class="form-inline">
            <div class="form-group mr-3">
              <input type="text" id="apellido" name="apellido" placeholder="Buscar por apellido" class="form-control">
            </div>
            <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
            <button type="submit" name="submit" class="btn btn-primary">Ver resultados</button>
          </form>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mt-3"><?= $titulo ?></h2>
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($alumnos && $sentencia->rowCount() > 0) {
                foreach ($alumnos as $fila) {
              ?>
                  <tr>
                    <td><?php echo escapar($fila["id"]); ?></td>
                    <td><?php echo escapar($fila["nombre"]); ?></td>
                    <td><?php echo escapar($fila["apellido"]); ?></td>
                    <td><?php echo escapar($fila["email"]); ?></td>
                    <td><?php echo escapar($fila["edad"]); ?></td>
                    <td>
                      <a href="<?= 'borrar.php?id=' . escapar($fila["id"]) ?>">🗑️Borrar</a>
                      <a href="<?= 'editar.php?id=' . escapar($fila["id"]) ?>">✏️Editar</a>
                    </td>
                  </tr>
              <?php
                }
              }
              ?>
            <tbody>
          </table>
        </div>
      </div>
    </div>

    <?php include "templates/footer.php"; ?>