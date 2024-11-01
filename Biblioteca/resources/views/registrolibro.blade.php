@extends('layouts.plantilla')
@section('contenido')

{{-- @dump($id) --}}

{{-- inicia formulario --}}

<link rel="stylesheet" href="{{ asset('css/styleregistro.css') }}">

<div class="container mt-5 col-md-6">
    
    @if(session('exito'))
        <x-Alert tipo="success">{{ session('exito') }}</x-Alert>

        <script>
            Swal.fire({
                title: 'Respuesta del servidor',
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    <div class="card-body text-justify ">

    <h2 class="text-center mb-4">Registro</h2>

<form action="/enviardatos" method="POST">
    @csrf
     <div class="mb-3">
    <label for="isbn" class="form-label">ISBN</label>
    <input type="text" class="form-control" name="txtisbn">
    <small>{{ $errors->first('txtisbn') }}</small>
    </div>

    <div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo') }}">
    <small class="text-danger fst-italic">{{ $errors->first('txttitulo') }}</small>
</div>

    <div class="mb-3">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" class="form-control" name="txtautor">
    <small>{{ $errors->first('txtautor') }}</small>
    </div>

    <div class="mb-3">
    <label for="paginas" class="form-label">Paginas</label>
    <input type="text" class="form-control" name="txtpaginas">
    <small>{{ $errors->first('txtpaginas') }}</small>
    </div>

    <div class="mb-3">
    <label for="anio" class="form-label">Año</label>
    <input type="text" class="form-control" name="txtanio">
    <small>{{ $errors->first('txtanio') }}</small>
    </div>

    <div class="mb-3">
    <label for="editorial" class="form-label">Editorial</label>
    <input type="text" class="form-control" name="txteditorial">
    <small>{{ $errors->first('txteditorial') }}</small>
    </div>

    <div class="mb-3">
    <label for="correo" class="form-label">Correo de la Editorial</label>
    <input type="text" class="form-control" name="txtcorreo">
    <small>{{ $errors->first('txtcorreo') }}</small>
    </div>

    <div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

     </div>
    </form>

   
</div>
<footer class="footer mt-auto py-3">
        <div class="container1 text-center">
            <p class="nombre-libro"></p>
            <p>&copy; {{ date('Y') }} Biblioteca </p>
            <p>{{ date('d') }} de {{ date('F') }}, {{ date('Y') }}</p>

        </div>

    </footer>
@endsection

{{-- Fin de formulario --}}
