<!DOCTYPE html>
<html>
<head>
    <title> Mi aplicacion </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body> 
    <div class="container">
        <h1> Información </h1>
        <ul>
            @foreach ($informacions as $informacion)
                <li>{{ $informacion->titulo }} - {{ $informacion->contenido }}</li>
            @endforeach
        </ul>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
