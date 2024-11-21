
@extends('layouts.plantilla') <!-- de donde se hereda -->
@section('contenido') <!-- limitar el contenido, de donde viene -->


@if(session('exito'))
        <script>
            Swal.fire({
                title: "¡Exito!",
                text: "{{{ session('exito') }}}",
                icon: "success",
                confirmButtonText: "Aceptar",
            });
        </script>
    @endif
    @if(session('error'))
        <script>
            Swal.fire({
                title: "¡Error!",
                text: "{{{ session('error') }}}",
                icon: "error",
                confirmButtonText: "Aceptar",
            });
        </script>
    @endif

    {{-- Inicia tarjetaCliente --}}
<div class="container mt-5 col-md-8">

    @foreach ($consultaclientes as $cliente)

  <div class="card text-justify font-monospace mt-4">

    <div class="card-header fs-5 text-primary">
      {{ $cliente->nombre }}
    </div>

    <div class="card-body">
      <h5 class="fw-bold"> {{ $cliente->correo }}</h5>
      <h5 class="fw-medium"> {{ $cliente->telefono }}</h5>
      <p class="card-text fw-lighter"></p>
    </div>

    <div class="card-footer text-muted">
      
      <a type="submit" class="btn btn-warning btn-sm" href="{{ route('rutaeditar',$cliente->id) }}">{{__('Editar')}}</a>

      <!-- Para eliminar -->
      <form action="{{route('rutaeliminar',$cliente->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Seguro que quiere eliminar el cliente?')">
          {{__('Eliminar')}}
        </button>

      </form>
    </div>

  </div>


@endforeach
{{-- Finaliza tarjetaCliente --}}

@endsection 