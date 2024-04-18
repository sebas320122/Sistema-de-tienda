<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reabastecimientos extends Model
{
    //nombre de tabla
    protected $table = 'reabastecimientos';

    use HasFactory;

    //Campos que se pueden llenar masivamente
    protected $fillable = 
    [
        'Proveedor',
        'Producto_id',
        'Descripcion',
        'Cantidad',
        'Costo',
        'Estado',
        'Fecha_estimada',
        'Fecha_entrega'
    ];
}
