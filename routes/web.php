<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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