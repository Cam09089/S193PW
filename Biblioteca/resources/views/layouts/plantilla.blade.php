<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleplantilla.css') }}">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title> @yield('titulo')</title>
</head>
<body>

    {{-- inicia navar --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('rutainicio') }}">{{__('Biblioteca')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('rutainicio')?'text-warning':'' }}" aria-current="page" href="{{ route('rutainicio') }}">{{__('Inicio')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('rutaregistrolibro')?'text-warning':'' }}" href="{{ route('rutaregistrolibro') }}">{{__('Registro De Libro')}}</a>
        </li>
      </ul>
    </div>
   
  </div>
</nav>
{{-- Finaliza navbar --}}

    @yield('contenido')
</body>
</html>