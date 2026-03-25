<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pedidos</title>
</head>

<body class="bg-azul-oscuro min-h-screen flex flex-col">
    <x-navbar />
    
    <main class="w-full lg:w-2/3 mx-auto rounded-2xl shadow-lg mb-10 mt-10 flex-grow">
        <h1 class="text-center text-amber-50 text-2xl font-bold p-3 pt-6">Personaliza tu pedido</h1>
        <form class="p-3">
            <div class="grid gap-6 mb-6">
                <div>
                    <label for="nombre" class="block mb-2.5 text-amber-50 text-md font-bold text-heading">Nombre Completo</label>
                    <input type="text" id="nombre"
                        class="bg-neutral-secondary-medium rounded-xl font-bold border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                        placeholder="Juan Pérez" required />
                </div>

                <div>
                    <label for="direccion"
                        class="block mb-2.5 text-amber-50 text-md font-bold text-heading">Dirección</label>
                    <input type="text" id="direccion"
                        class="bg-neutral-secondary-medium rounded-xl font-bold border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                        placeholder="Fachinal" required />
                </div>
                <div>
                    <label for="telefono"
                        class="block mb-2.5 text-amber-50 text-md font-bold text-heading">Teléfono</label>
                    <input type="tel" id="telefono"
                        class="bg-neutral-secondary-medium rounded-xl font-bold border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                        placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                </div>

            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2.5 text-amber-50 text-md font-bold text-heading">Correo Electrónico</label>
                <input type="email" id="email"
                    class="bg-neutral-secondary-medium rounded-xl font-bold border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                    placeholder="juanPerez@gmail.com" required />
            </div>

            <label for="message" class="block mb-2.5 text-amber-50 text-md font-bold text-heading">Escribe tu pedido o cotización</label>
            <textarea id="message" rows="4"
                class="bg-neutral-secondary-medium rounded-xl font-bold border border-default-medium text-heading text-sm rounded-base mb-6 focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body"
                placeholder="Escribe tu mensaje aquí..."></textarea>

            <button type="submit"
                class="text-amber-50 text-xl font-bold rounded-3xl h-14 bg-fondo-tarjeta hover:bg-amber-700 cursor-pointer w-full box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Enviar</button>
        </form>
    </main>
    
    <x-footer />
</body>

</html>