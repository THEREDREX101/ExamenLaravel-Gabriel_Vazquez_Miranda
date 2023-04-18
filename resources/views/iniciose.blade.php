<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/styleini.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="{{asset('img/chrome-3263652_1920.jpg')}}" alt="">
      </div>
      <div class="back">
        <img class="backImg" src="{{asset('img/backImg.jpg')}}" alt="">
        <div class="text">
          <span class="text-1">Cumpliendo tus espectativas,<br> ponte a la moda</span>
          <span class="text-2">Unete a nuestra comunidad</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Inicio de Sesión</div>
          <form action="../proyecto final/assets/php/iniciosesion_be.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="correo" placeholder="Correo Electronico" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
              </div>
              <div class="text"><a href="#"></a></div>
              <div class="button input-box">
                <input type="submit" value="Iniciar Sesión">
              </div>
              <ul>
              <a class="salir" href="./index.html">Regresar</a>
              </ul>
              <div class="text sign-up-text">No tienes una cuenta? <label for="flip">Registrate</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Registrarse</div>
        <form action="../proyecto final/assets/php/registro_usuario_be.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="nombre" placeholder="Nombre" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="usuario" placeholder="Usuario" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="correo" placeholder="Correo Electronico" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Registrarse">
              </div>
              <ul>
                <a class="salir" href="./index.html">Regresar</a>
              </ul>
              <div class="text sign-up-text">Ya tienes una cuenta? <label for="flip">Inicia Sesión</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
