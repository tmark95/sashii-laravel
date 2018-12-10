<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenidos a Sashii</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body style="margin:5% auto; border: solid; border-color: black; background-color: white; padding: 20px;">
    <img class="logostart" src="img/sashiilogo.png">
    <?php if(!empty($user)): ?>      
      <a href="pages/logout.php">
        Logout
      </a>
    <?php else: ?>   

    <h2 class="registrarse">Por Favor Ingrese o Registrese</h2>
      <a href="/login">Login</a> or
      <a href="/register">Registrarse</a>
    <?php endif; ?>
  </body>
</html>