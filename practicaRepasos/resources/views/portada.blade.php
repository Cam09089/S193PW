<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    
    @vite(['resources/js/app.js'])

    <style>
        body {
            background-color: #ffe4e1; 
            color: #333;
        }

        h1 {
            color: #ff69b4; 
            font-size: 3rem;
            font-weight: bold;
        }

        .container {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 1.2rem;
            color: #ff1493; 
        }

       

    </style>
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
    <a href="{{ route('repaso') }}" class="btn btn-secundary">REPASO 1</a>

    </div>
    
</body>
</html>