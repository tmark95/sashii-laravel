@extends('view')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sashii</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/csstoi.css">
</head>
<body>
  <header>
      <a class="nav-cel" href="#"><i class="fas fa-bars"></i></a>
      <a href="header.php"><img class="logo" src="/img/sashiilogo.png"></a>
    <ul class="nav-desktop">
      <li><a href="#">Home</a></li>
      <li><a href="menu.php">El Menu</a></li>
      <li><a href="faq.php">Faq</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
      <a href="perfil.php"><i class="fas fa-user-circle fa-2x"></i></a>
      <a href="../logout.php" style="color: red;">Logout</a>
      <a class="carrito" href="#"><i id="carrito" class="fas fa-shopping-cart"></i></a>
  </header>
  <main>
    @yield('content')
    {{--  @section('content')

      <div class="galeria">
        <div class="imagen-principal">
        <img src="/img/sushi1.jpg">
        </div>
        <div class="imagenes-chicas">
          <img src="/img/sushi2.jpg">
          <img src="/img/sushi3.jpg">
          <img src="/img/sushi4.jpg">
          <img src="/img/sushi5.jpg">
        </div>
      </div>
    @endsection
 --}}
    <hr>
    <div class="banner-contacto">
      <i id="celular" class="fas fa-mobile-alt"> - 11.4041.2160</i>
      <i id="mail" class="far fa-envelope"> - info@sashiisushi.com</i>
      <div id="redes">
      <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"> - @sashii_</i>
      </div>
    </div>
    <hr>
  </main>
  <footer>
    <li><a href="#">Home</a></li>
    <li><a href="menu.php">El Menu</a></li>
    <li><a href="faq.php">Faq</a></li>
    <li><a href="contacto.php">Contacto</a></li>
  </footer>
</body>
</html>