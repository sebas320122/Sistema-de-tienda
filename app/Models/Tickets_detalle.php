<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets_detalle extends Model
{
    //nombre de tabla
    protected $table = 'tickets_detalle';

    use HasFactory;

    //Campos que se pueden llenar masivamente
    protected $fillable = 
    [
    'Ticket_id',
    'Producto',
    'Producto_id',
    'Cantidad',
    'Subtotal',
    'Estado'
    ];

    public function Tickets()
    {
        return $this->belongsTo(Tickets::class);
    }
}
