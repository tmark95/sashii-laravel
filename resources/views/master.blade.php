<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/csstoi.css">

  </head>
  <body>
    <header>
      <section class="real-header">
        <a href="/"><img class="logo" src="/img/sashiilogo.png"></a>
        <a href="perfil.php"><i class="fas fa-user-circle fa-2x"></i></a>
        <a href="">Logout</a>
        <a id="carrito" class="carrito" href="#"><i class="fas fa-shopping-cart"></i></a>
      </section>
        <nav class="sub-header">
          <ul class="menu">
            <li><a href="/menu">Menú</a></li>
            <li><a href="faq.php">Faqs</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>
    </header>
    <main>
    @yield('featured')
    @yield('menu')
    @yield('veg')


    </main>
    <footer>
      <div class="banner-contacto">
        <i id="celular" class="fas fa-mobile-alt"> - 11.4041.2160</i>
        <i id="mail" class="far fa-envelope"> - info@sashiisushi.com</i>
        <div id="redes">
        <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"> - @sashii_</i>
        </div>
      </div>
    </footer>
  </body>
</html>