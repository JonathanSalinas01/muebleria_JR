<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Colecciones</title>
</head>

<body>
    <x-navbar />
<main>
    <div class="flex flex-col gap-4 p-4 w-full">
        @foreach ($productos as $producto)
            <x-tarjeta-coleccion :producto="$producto" />
        @endforeach
    </div>
</main>
    <x-footer />
</body>

</html>
