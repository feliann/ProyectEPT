<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styleviejo.css">
  <title>Registrarse</title>
</head>
<body>
  <section class="form-register">
    <h4>Registrarse</h4>
    <form action="Login.php" method = "POST">
    <input class="controls" type="text" name="Nombre" id="Nombre" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="Apellido" id="Apellido" placeholder="Ingrese su Apellido">
    <input class="controls" type="email" name="Correo" id="Correo" placeholder="Ingrese su Correo">
    <input class="controls" type="password" name="Contrasena" id="Contrasena" placeholder="Ingrese su Contraseña">
    <input type="submit" value= "Registrar" name="registro" id="registro" placeholder="Registrar">
    
    
    
</form>
</div>

    <a href="iniciosesion.php">¿Ya tengo Cuenta?<a>
  </section>

</body>
</html>