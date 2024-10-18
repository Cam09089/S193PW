<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">
    @vite(['resources/js/app.js'])

    <title>Conversiones</title>
</head>
<body class="bg-pink p-3">
    
    <h1>Conversora</h1>
    <form action="/convertir" method="POST">
    @csrf
        <div>
            <label for="valor">Ingresa la cantidad:</label>
            <input type="number" name="valor" id="valor">
        </div>
        <div>
            <label for="conversion">
                Selecciona:
            </label>
            <select name="conversion" id="conversion">
                <option value="MG_GB">MG_GB</option>
                <option value="GB_MB">GB_MB</option>
                <option value="GB_TB">GB_TB</option>
                <option value="TB_GB">TB_GB</option>
            </select>
            <div>
                <button type="submit">Calcular</button><br>
            </div>
            
        </div>
        @if(isset($r))
    <div>
        <br><h2>Resultado:{{ $r }}</h2><br>
        <br>
    </div>
    @endif
    </form>
   

  
</body>
</html>