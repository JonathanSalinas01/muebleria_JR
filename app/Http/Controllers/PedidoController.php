<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PedidoMailable;

class PedidoController extends Controller
{
    public function enviar(Request $request)
    {
        // 1. Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        // 2. Enviar el correo (reemplaza con tu correo real)
        Mail::to('solojulian01@gmail.com')->send(new PedidoMailable($request->all()));

        // 3. Redirigir con un mensaje de éxito
        return back()->with('success', '¡Tu pedido ha sido enviado con éxito!');
    }
}