<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    // 1. Le decimos a Laravel el nombre exacto de tu tabla
    protected $table = 'productos';

    // 2. Le indicamos cuál es tu llave primaria (porque no es 'id')
    protected $primaryKey = 'id_producto';

    // 3. Desactivamos los timestamps porque tu tabla SQL no tiene 
    // las columnas 'created_at' ni 'updated_at'
    public $timestamps = false;

    // 4. Definimos los campos en los que Laravel tiene permitido insertar datos
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen',
        'id_categoria',
    ];
}
