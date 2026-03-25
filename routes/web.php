<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/', [ProductoController::class, 'index']);
Route::get('/colecciones', function () {
    return view('colecciones');
}) ->name('colecciones');

Route::get('/colecciones', [ProductoController::class, 'Obtenercolecciones'])->name('colecciones');

Route::get('/pedidos', function () {
    return view('pedidos');
}) ->name('pedidos');


Route::post('/enviar-pedido', [PedidoController::class, 'enviar'])->name('pedido.enviar');