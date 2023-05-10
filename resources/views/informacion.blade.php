@extends('layout')

@section('contenido')
<div class="container">
    <h1>Información Agregada</h1>
    @if (session('mensaje'))
    <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Contenido</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($informacions as $informacion)
                <tr>
                    <td><h3>{{ $informacion->titulo }}</h3></td>
                    <td><p>{{ $informacion->contenido }}</p></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('create') }}" class="btn btn-primary">Agregar Información</a>
</div>
@endsection
