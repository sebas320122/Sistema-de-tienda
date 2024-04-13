<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //nombre de tabla
    protected $table = 'productos';

    use HasFactory;

    //Campos que se pueden llenar masivamente
    protected $fillable = 
    [
    'Descripcion',
    'Categoria',
    'En_exhibicion',
    'En_almacen',
    'Precio'
    ];
}
