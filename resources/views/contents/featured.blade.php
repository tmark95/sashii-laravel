@extends('master')

@section('page_title', 'Sashii | Home')

@section('featured')
  <section class="galeria">
    <div class="imagen-principal">
      <img src="../../img/sushi1.jpg">
    </div>
    <h2 class="container">Productos destacados</h2>
    <div class="product-container container">
      {{-- TODO: Tiene que traer productos destacados desde la db --}}
      <article class="product">
        <img src="../../img/sushi2.jpg">
        <div class="product-data">
          <h3>Nombre del producto</h3>
          <p>Poner Descripción</p>
          <p><a href="#">Ver</a></p>
        </div>
      </article>
      <article class="product">
        <img src="../../img/sushi3.jpg">
        <div class="product-data">
          <h3>Nombre del producto</h3>
          <p>Poner Descripción</p>
          <p><a href="#">Ver</a></p>
        </div>
      </article>
      <article class="product">
        <img src="../../img/sushi4.jpg">
        <h3>Nombre del producto</h3>
        <p>Poner Descripción</p>
        <p><a href="#">Ver</a></p>
      </article>
      <article class="product">
        <img src="../../img/sushi5.jpg">
        <h3>Nombre del producto</h3>
        <p>Poner Descripción</p>
        <p><a href="#">Ver</a></p>
      </article>
      <article class="product">
        <img src="../../img/sushi3.jpg">
        <h3>Nombre del producto</h3>
        <p>Poner Descripción</p>
        <p><a href="#">Ver</a></p>
      </article>
      <article class="product">
        <img src="../../img/sushi2.jpg">
        <h3>Nombre del producto</h3>
        <p>Poner Descripción</p>
        <p><a href="#">Ver</a></p>
      </article>
    </div>
  </section>
@endsection
