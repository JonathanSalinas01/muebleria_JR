<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // El modelo va a la base de datos y trae todos los registros
        $productos = Productos::where('id_categoria', 1)->get(); // Aquí puedes cambiar el número '1' por el ID de la categoría que deseas mostrar

        // Enviamos esos datos a una vista (pantalla)
        return view('index', compact('productos'));
    }

    public function Obtenercolecciones()
    {
        $productos = Productos::where('id_categoria', 2)->get(); // Cambia el número '2' por el ID de la categoría de colecciones
        return view('colecciones', compact('productos'));
    }
}
