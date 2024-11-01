@extends('layouts.plantilla')
@section('contenido')

{{-- inicia formulario --}}

<link rel="stylesheet" href="{{ asset('css/styleregistro.css') }}">

<div class="container mt-5">
    @if(session('exito'))
    <x-Alert tipo="success">{{session('exito')}}</x-Alert>
    @endif
    <h2 class="text-center mb-4">Registro</h2>

    <div>
       
        <div>

<form action="enviardatos" method="POST">
    @csrf
     <div class="mb-3">
    <label for="isbn" class="form-label">ISBN</label>
    <input type="text" class="form-control" name="txtisbn">
    </div>

    <div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="txttitulo">
    </div>

    <div class="mb-3">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" class="form-control" name="txtautor">
    </div>

    <div class="mb-3">
    <label for="paginas" class="form-label">Paginas</label>
    <input type="text" class="form-control" name="txtpaginas">
    </div>

    <div class="mb-3">
    <label for="anio" class="form-label">Año</label>
    <input type="text" class="form-control" name="txtanio">
    </div>

    <div class="mb-3">
    <label for="editorial" class="form-label">Editorial</label>
    <input type="text" class="form-control" name="txteditorial">
    </div>

    <div class="mb-3">
    <label for="correp" class="form-label">Correo de la Editorial</label>
    <input type="text" class="form-control" name="txtcorreo">
    </div>

    <div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
     
</form>

        </div>
    </div>
   
</div>
<footer class="footer mt-auto py-3">
        <div class="container1 text-center">
            <p class="nombre-libro"></p>
            <p>&copy; {{ date('Y') }} Biblioteca </p>
            <p>{{ date('d') }} de {{ date('F') }}, {{ date('Y') }}</p>

        </div>

    </footer>
{{-- Fin de formulario --}}

@endsection