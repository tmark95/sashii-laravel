@extends('master')

@section('page_title', 'Sashii | Home')

@section('featured')
  <div class="galeria">
    <div class="imagen-principal">
      <img src="../../img/sushi1.jpg">
    </div>
    <div class="imagenes-chicas">
      {{-- TODO: Tiene que traer productos destacados desde la db --}}
      <img src="../../img/sushi2.jpg">
      <img src="../../img/sushi3.jpg">
      <img src="../../img/sushi4.jpg">
      <img src="../../img/sushi5.jpg">
    </div>
  </div>
@endsection
