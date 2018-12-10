@extends('layouts.app')
@extends('header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@extends('header')

     <h1>Bienvenido</h1>
     <br>
     <img src="/img/sushi.gif" alt="">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
