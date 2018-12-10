@extends('header')
<main>
  @section('index')
    <div class="galeria">
      <div class="imagen-principal">
        <img src="../../img/sushi1.jpg">
      </div>
      <div class="imagenes-chicas">
        <img src="../../img/sushi2.jpg">
        <img src="../../img/sushi3.jpg">
        <img src="../../img/sushi4.jpg">
        <img src="../../img/sushi5.jpg">
      </div>
    </div>
    <hr>
    <div class="banner-contacto">
      <i id="celular" class="fas fa-mobile-alt"> - 11.4041.2160</i>
      <i id="mail" class="far fa-envelope"> - info@sashiisushi.com</i>
      <div id="redes">
      <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"> - @sashii_</i>
      </div>
    </div>
    <hr>
    @endsection
  </main>
