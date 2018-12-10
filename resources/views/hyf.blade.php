<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sashii</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
  <header>
      <a class="nav-cel" href="#"><i class="fas fa-bars"></i></a>
      <a href="header.php"><img class="logo" src="/img/sashiilogo.png"></a>
      <ul class="nav-desktop">
        <li><a href="#">Home</a></li>
        <li><a href="menu">El Menu</a></li>
        <li><a href="faq">Faq</a></li>
        <li><a href="contacto">Contacto</a></li>
      </ul>
      <a href="perfil"><i class="fas fa-user-circle fa-2x"></i></a>
      <a href="">Logout</a>
      <a class="carrito" href="#"><i id="carrito" class="fas fa-shopping-cart"></i></a>
  </header>
  <main>

      @yield('content')
      
  </main>

  <hr>
    <div class="banner-contacto">
          <i id="celular" class="fas fa-mobile-alt"> - 11.4041.2160</i>
          <i id="mail" class="far fa-envelope"> - info@sashiisushi.com</i>
      <div id="redes">
        <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"> - @sashii_</i>
      </div>
    </div>
  <hr>
  <footer>
    <li><a href="#">Home</a></li>
    <li><a href="/elmenu">El Menu</a></li>
    <li><a href="/faq">Faq</a></li>
    <li><a href="/contacto">Contacto</a></li>
  </footer>
</body>
</html>