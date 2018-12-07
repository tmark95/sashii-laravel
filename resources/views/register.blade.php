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

      @if(!empty($message))
        <p> <?= $message ?></p>
      @endif

    <h1>Registrarse</h1>
    <span>o <a href="login">Login</a></span>

    <form action="register" method="POST" enctype="multipart/form-data">
        <input name="nombre" type="text" placeholder="Ingrese su nombre" value=" @if(!empty($nombre))$nombre @else("") required>
            
            @dump
            @if (isset($errores["nombre"]))
          '<p style="color:red;">'.$errores["nombre"].'</p>'
            @else ("")
            @endif


      <input name="apellido" type="text" placeholder="Ingrese su apellido"value="!empty($apellido))?$apellido:""; ?>" required>
          @if (isset($errores["apellido"]))
             @dump '<p style="color:red;">'.$errores["apellido"].'</p>'
             @else ("")
          @endif
      <input name="email" type="email" placeholder="Ingrese su email" value="<?php echo (!empty($email))?$email:""; ?>" required>
          @dump 
            @if(isset($errores["email"]))
              '<p style="color:red;">'.$errores["email"].'</p>'
            @else("")
            @endif
          @dump 
            @if(isset($errores["confirm_email"]))'<p style="color:red;">'.$errores["confirm_email"].'</p>'
            @else("")
            @endif
      <input name="confirm_email" type="email" placeholder="Confirmar email" required>
          @dump
            @if(isset($errores["confirm_email"]))'<p style="color:red;">'.$errores["confirm_email"].'</p>'
            @else("")
            @endif
      <input name="password" type="password" placeholder="Introduzca su contraseÃ±a" required>
          @dump
            @if(isset($errores["password"]))'<p style="color:red;">'.$errores["password"].'</p>'
            @else("")
            @endif
          @dump
            @if(isset($errores["confirm_password"]))'<p style="color:red;">'.$errores["confirm_password"].'</p>'
            @else("")
            @endif
      <input name="confirm_password" type="password" placeholder="Confirmar contraseÃ±a" required>
          @dump 
            @if(isset($errores["confirm_password"]))'<p style="color:red;">'.$errores["confirm_password"].'</p>'
            @else("")
            @endif
      <input id= "terminos" name="terminos" type="checkbox" required>
      <label for="terminos" style="">Acepto los Terminos y Condiciones.</label><br><br>
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
