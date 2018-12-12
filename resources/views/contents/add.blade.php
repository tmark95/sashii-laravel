@extends('master')

@section('add')
    <h1>AGREGATOR</h1>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('add2') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Nombre del Producto</label>
            <input type="text" class="form-control" id="productName"  name="name">
        </div>
        <div class="form-group">
            <label for="description">Categoria del Producto</label>
            <select class="form-control" name="category">
                <option>Rolls & Makis</option>
                <option>Sashimis</option>
                <option>Niguiris</option>
                <option>Vegetarianos</option>
                <option>Especiales</option>
                <option>Bebida</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Precio del Producto</label>
            <input type="text" class="form-control" id="productAmount" name="price"/>
        </div>
        <div class="form-group">
            <label for="description">Disponible</label><br/>
            <label class="radio-inline"><input type="radio" name="available" value="1"> Yes</label>
            <label class="radio-inline"><input type="radio" name="available" value="0"> No</label>
        </div>
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea type="text" class="form-control" id="productDescription" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">AGREGAR PRODUCTO NUEVO</button>
    </form>
@endsection
