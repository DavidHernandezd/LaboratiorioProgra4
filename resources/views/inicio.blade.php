@extends('layout')

@section('contenido')
<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-4">Bienvenido a mi aplicación</h1>
        <p class="lead">Aquí puedes agregar información y ver la información agregada</p>
        <hr class="my-4">
        <a href="{{ route('create') }}" class="btn btn-primary btn-lg">Agregar información</a>
    </div>
    
    @if (session('mensaje'))
    <div class="alert alert-success mt-3">
        {{ session('mensaje') }}
    </div>
    @endif
</div>
@endsection
