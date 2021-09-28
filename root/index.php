<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css" />
  <link rel="icon" href="favicon_io/favicon-32x32.png" />
</head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid d-block mx-auto" src="https://logopond.com/logos/0c50af251ea4d65f91dd291e1d14f0da.png" />
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
            <div class="col-md-12">
              <form method="post" id="login">
                <div class="form-group">
                  <label>Usuario</label>
                  <input type="text" class="form-control" placeholder="Ingrese su usuario" id="txtUsuario" name="txtUsuario" required="required" />
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label>Contraseña</label>
                  <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="txtContra" name="txtContra" required="required" />
                </div>
                <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
              </form>
              <?php
              include("ingresar.php");
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="mb-0">
          © 2021. Jardin de niños "Antonia Labastida"
        </p>
      </div>
    </div>
  </div>
</footer>

</html>