<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleinicio.css') }}">
    @vite(['resources/js/app.js'])

    <title>@section('titulo, Inicio')</title>
</head>
<body>
    <div class="full-height">
    <h1 class="display-2">Bienvenido a tu Biblioteca Virtual!</h1>

    <p>Presiona para comenzar el registro</p>

    <a href="/registrolibro" class="btn btn-custom btn-lg mt-3">Ir al registro</a>
    </div>

  <center> <div class="noti-section mt-4">
        <h2 class="noti-titulo">Noticia Literaria</h2>

        <p class="noti-content">24 de Octubre. Dia de las Bibliotecas</p>
        <img src="{{ asset('img/noticia.png') }}" alt="yo" width="400">

    </div></center> 

    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <p class="nombre-libro"></p>
            <p>&copy; {{ date('Y') }} Biblioteca </p>
            <p>{{ date('d') }} de {{ date('F') }}, {{ date('Y') }}</p>

        </div>

    </footer>
</body>
</html>