<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body style="margin-top: 5%;">   

    <h1>Registrarse</h1>
    <span> o <a href="/login">Login</a></span>

    <div>
      @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      
      </div>

      @endif
    </div>
    <form action="/register" method="POST" enctype="multipart/form-data">
      <input name="nombre" type="text" placeholder="Ingrese su nombre" value="" required>
      <input name="apellido" type="text" placeholder="Ingrese su apellido" value="" required>
      <input name="email" type="email" placeholder="Ingrese su email" value="" required>
      <input name="confirm_email" type="email" placeholder="Confirmar email" required>
      <input name="password" type="password" placeholder="Introduzca su contraseña" required>
      <input name="confirm_password" type="password" placeholder="Confirmar contraseña" required>
      <input id= "terminos" name="terminos" type="checkbox" required>
      <label for="terminos" style="">Acepto los Terminos y Condiciones.</label><br><br>
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
