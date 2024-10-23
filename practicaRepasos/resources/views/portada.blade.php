<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/js/app.js'])


</head>
<body>
    <div class="container text-center mt-5">
        <h1>Practica Repasos</h1>
        <br>
        <p>Nombre: Ana Camila Pérez Arana</p>
        <p>Teléfono: 4428495716</p>
        <p>Edad: 20</p>
        <p>Correo: 122042654@upq.edu.mx</p>
        <p>Domicilio: Pedro Escobedo</p>
        
    </div>
    <div class="text-center my-4">
        <img src="{{ asset('img/camm.jpg') }}" alt="yo" width="400">

    </div>
    <div class="text-center my-4" >
    <a href="{{ route('repaso') }}" class="btn btn-secundary">REPASO 1</a>xg

    </div>
    
</body>
</html>