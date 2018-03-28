<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <header class="cabecera">
        <div class="divTituloPrincipal">
          <div class="">
            <img src="images/loremLogo.png" alt="logo">
          </div>
          <div class="">
            <h2 class="tituloPrincipal">eCommerce DH</h2>
          </div>
        </div>
        <div class="miCuenta">
          <a href="login.php">Mi cuenta</a>
          <p class="separadorCarrito">|</p>
          <a href="#"> Carrito</a>
        </div>
        <nav >
          <ul class="navegador">
            <li><a href="home.php">HOME</a></li>
            <li><a href="registro.php">REGISTRO</a></li>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="nosotros.php">NOSOTROS</a></li>
          </ul>
        </nav>
      </header>
      <section class="seccionPrincipal">
        <div class="logColor">
          <h3>Por favor, complete sus datos para el registro</h3>
          <form class="" action="index.html" method="post">
            <div class="form-group">
              <label for="" class="labelForm">Nombre</label>
              <input type="text" name="" value="" class="input-cris" required>
            </div>
            <div class="form-group">
              <label for="" class="labelForm">Apellido</label>
              <input type="text" name="" value="" class="input-cris" required>
            </div>
            <div class="form-group">
              <label for="" class="labelForm">Email</label>
              <input type="email" name="" value="" class="input-cris" required>
            </div>
            <div class="form-group">
              <label for="" class="labelForm">Contraseña</label>
              <input type="password" name="" value="" class="input-cris" required>
            </div>
            <div class="form-group">
              <label for="" class="labelForm">Repita contraseña</label>
              <input type="password" name="" value="" class="input-cris" required>
            </div>
            <br>
            <div class="labelForm">
              <button type="submit" name="button" class="btn btn-primary">Enviar</button>
            </div>
            <br>
            <div class="labelForm">
              <button type="reset" name="button" class="btn btn-primary">Reset</button>
            </div>
            <br>
          </form>
        </div>
      </section>
      <footer class="piePag">
        <ul class="listaRedes">
          <li><span class="fab fa-facebook iconRedes"></span> Facebook</li>
          <li><span class="fab fa-twitter iconRedes"></span>Twitter</li>
          <li><span class="fab fa-instagram iconRedes"></span>Instagram</li>
        </ul>
      </footer>
    </div>
    <div>
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
