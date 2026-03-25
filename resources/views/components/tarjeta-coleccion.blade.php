@props(['producto'])

<div class="bg-azul-oscuro m-1 rounded-xl w-full">

    <div
        class="flex flex-col bg-neutral-primary-soft p-6 border rounded-xl border-default shadow-xs md:flex-row w-full">

        <div class="flex flex-col justify-around md:pl-6 leading-normal w-full">
            <div>
                <h5 class="mb-2 text-2xl md:text-6xl text-amber-50 font-bold tracking-tight text-heading">
                    {{ $producto->nombre }}</h5>
                <p class="mb-6 text-body md:text-3xl text-amber-50">{{ $producto->descripcion }}</p>
            </div>

            <div>
                <a href="#"
                    class="inline-flex items-center w-auto text-amber-50 font-bold my-1 bg-azul-boton hover:bg-blue-400 rounded-xl box-border hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-xl leading-5 text-2xl px-4 py-2.5 focus:outline-none">
                    Comprar
                    <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </a>
            </div>
        </div>
        <img class="object-cover w-full rounded-xl h-64 md:h-auto md:w-72 mb-4 md:mb-0" src="{{ $producto->imagen }}"
            alt="{{ $producto->nombre }}">
    </div>

</div>