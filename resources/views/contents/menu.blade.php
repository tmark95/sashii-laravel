@extends('master')
@section('page_title', 'Sashii | Menú')

@section('menu')
<h1> Nuestro Menú</h1>
<div class="containercategoria">
	<ul class="categoria">{{-- // TODO: Tiene que venir de base de datos --}}
    <li><a href="rollsmakis.php" class="categorias"><img src="../../img/makis.jpg"><br> Rolls & Makis </a></li>
    <li><a href="sashimis.php" class="categorias"><img src="../../img/sashimi.jpg"><br> Sashimis </a></li>
    <li><a href="niguiris.php" class="categorias"><img src="../../img/niguiri.jpg"><br> Niguiris </a></li>
    <li><a href="especiales.php" class="categorias"><img src="../../img/especiales.jpg"><br> Especiales </a></li>
    <li><a href="vegetarianos.php" class="categorias"><img src="../../img/vegetariano.jpg"><br> Vegetarianos </a></li>
    <li><a href="bebidas.php" class="categorias"><img src="../../img/bebidas.jpg"><br> Bebidas </a></li>
  </ul>
</div>
@endsection
