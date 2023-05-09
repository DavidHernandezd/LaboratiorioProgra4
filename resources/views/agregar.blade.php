@extends('layout')

@section('contenido')
<div class="container">
    <h1> Agregar informacion</h1>
    <form action="{{ route ('guardar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulos</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea class="form-control" id="contenido" name="contenido"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection