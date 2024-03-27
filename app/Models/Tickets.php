<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    //nombre de tabla
    protected $table = 'tickets';

    use HasFactory;

    //Campos que se pueden llenar masivamente
    protected $fillable = 
    [
    'Empleado',
    'Total'
    ];

    public function tickets_detalle()
    {
        return $this->hasMany(Tickets_detalle::class, 'Ticket_id');
    }
}
