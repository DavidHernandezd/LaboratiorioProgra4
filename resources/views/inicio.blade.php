@extends('layout')

@section('contenido')
<div class="container">
    <h1>Bienvenido a mi aplicación</h1>
    <p>Aquí puedes agregar información y ver la información agregada</p>
    <a href="{{ route('agregar') }}" class="btn btn-primary">Agregar información</a>
    @if (session('mensaje'))
    <div class="alert alert-success mt-3">
        {{ session('mensaje') }}
    </div>
@endif
</div>
@endsection
