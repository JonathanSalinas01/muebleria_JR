@props(['producto'])

<div class="rounded-2xl h-full">
    
    <div class="bg-fondo-tarjeta mt-3 flex flex-col h-full max-w-sm p-4 border border-default rounded-2xl shadow-xs">
        
        <a href="#">
            <img class="rounded w-full h-48 " src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}" />
        </a>
        
        <a href="#">
            <h5 class="mt-6 mb-2 text-2xl text-amber-50 font-semibold tracking-tight text-heading">{{$producto->nombre}}</h5>
        </a>
        
        <p class="mb-6 text-body text-amber-50">{{$producto->descripcion}}</p>
        
        <div class="mt-auto flex flex-col items-end">
            <p class="text-2xl font-bold pb-2 text-amber-50 w-full text-left">Precio: ${{$producto->precio}}</p>
            
            <a href="https://web.whatsapp.com/" class="self-end inline-flex items-center text-body bg-azul-boton hover:bg-blue-400 font-semibold w-30 rounded box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 text-sm px-4 py-2.5 focus:outline-none">
                Comprar
                <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
            </a>
        </div>
        
    </div>

</div>