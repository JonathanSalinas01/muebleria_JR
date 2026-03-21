<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // El modelo va a la base de datos y trae todos los registros
        $productos = Productos::all();

        // Enviamos esos datos a una vista (pantalla)
        return view('index', compact('productos'));
    }
}
