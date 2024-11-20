<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
    <h1>Registro de Prendas</h1>


    <div>
        @if (session('exito'))
        <x-Alert tipo="success">{{session('exito') }}</x-Alert>
        @endif

        @session('exito')
        <x-Alert tipo="warning">{{ $value }}</x-Alert>
        @endsession

        @session('exito')
       {! <script>
            Swall.fire({
                tittle:'Respuesta del servidor',
                text:"{{session('exito') }}",
                icon: "sucess"
            });

        </script>!}

        <form action="/enviar" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titulo">Prenda:</label>
                <input type="text" name="txtprenda" value="{{ old('txtprenda') }} ">
                <small class="text-danger fst-italic">{{ $errors->first('txtprenda') }}</small>
            </div>
<br>
            <div class="mb-3">
                <label for="">Color:</label>
                <input type="text" name="txtcolor" id="">
                <small class="text-danger fst-italic">{{ $errors->first('txtcolor') }}</small>
            </div>
<br>
            <div class="mb-3">
                <label for="">Cantidad</label>
                <input type="text" name="txtCantidad" id="">
                <small class="text-danger fst-italic">{{ $errors->first('txtcantidad') }}</small>
            </div>
           <br> 
            <button type="button">Guardar prendas</button>
            
        </form>

    </div>
 
</body>
</html>