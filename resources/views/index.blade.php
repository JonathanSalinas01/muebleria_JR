<!DOCTYPE html>
<html lang="ens">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Mueblería Jorge Rodriguez</title>
</head>
<body class="bg-orange-50">
    <header class="">
        <x-navbar />
    </header>
    <main class="lg:-mt-14">
        <section style="background-image: url('{{asset('images/fondo_hero.png')}}')"
        class="bg-center bg-no-repeat bg-dark bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-6 text-4xl font-bold tracking-tighter text-mauve-950 md:text-5xl lg:text-6xl">Jorge Rodriguez Muebles</h1>
            <p class="mb-8 text-base font-normal text-mauve-950 md:text-xl sm:px-16 lg:px-48">Transforma tu hogar en un lugar único</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">
            <button type="button" class="inline-flex items-center justify-center bg-blue-700 rounded-2xl text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium rounded-base text-base px-5 py-3 focus:outline-none">
                Ver colecciones
                <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
            </button>
        </div>
    </div>
    </section>
    <section class="bg-blue-700">
        <h2 class="text-4xl text-zinc-100 font-bold p-2 text-center">Destacados</h2>
    </section>

    </main>

</body>
</html>