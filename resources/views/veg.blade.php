@extends('productos')
@section('vegetarianos')
<h1> Vegetarianos </h1>

  	<div class="producto">
    	<img src="../../img/vegetariano.jpg" alt="">
      <h3 class="titulo">Vegetarian Roll</h3>
      <p class="descripcion">Pepino japonés, palta y philadelphia con sésamo blanco por fuera.</p>
			<button type="button" name="Añadir al carrito">Añadir al carrito</button>
	  </div>

		<div class="producto">
			<img src="../../img/vegetariano.jpg" alt="">
      <h3 class="titulo">Bio Roll</h3>
      <p class="descripcion">Pepino japonés, palta y zanahoria, con verdeo por fuera.</p>
			<button type="button" name="Añadir al carrito">Añadir al carrito</button>
	  </div>

		<div class="producto">
			<img src="../../img/vegetariano.jpg" alt="">
      <h3 class="titulo">Mango Roll</h3>
      <p class="descripcion">Relleno con palta y phila, envuelto en mango, bañado con maracuyá.</p>
			<button type="button" name="Añadir al carrito">Añadir al carrito</button>
	  </div>

		<div class="producto">
			<img src="../../img/vegetariano.jpg" alt="">
      <h3 class="titulo">Vegetarian Fabric</h3>
      <p class="descripcion">Palta y phila, rebozado en panko por fuera.</p>
			<button type="button" name="Añadir al carrito">Añadir al carrito</button>
	  </div>

		<div class="producto">
			<img src="../../img/vegetariano.jpg" alt="">
      <h3 class="titulo">Vegetarian Maki</h3>
      <p class="descripcion">Palta, pepino y phila, envuelto en alga.</p>
			<button type="button" name="Añadir al carrito">Añadir al carrito</button>
	  </div>

    <a href="menu.php" class="volver">Volver al Menú</a>

  <hr>
   <div class="banner-contacto">
     <i id="celular" class="fas fa-mobile-alt"> - 11.4041.2160</i>
     <i id="mail" class="far fa-envelope"> - info@tmtsushi.com</i>
     <div id="redes">
     <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"> - @TMTsushi</i>
     </div>
   </div>
   <hr>
   @endsection