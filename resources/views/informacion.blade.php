@extends('layout')

@section('contenido')
<div class="container">
    <h1>Informacion agregada</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Contenido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Informaciones as $informacion)
            <tr>
                <td>{{ $informacion ->titulo }}</td>
                <td>{{ $informacion -> contenido}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection