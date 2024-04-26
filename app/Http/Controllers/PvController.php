<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tickets;
use App\Models\Tickets_detalle;
use App\Models\Productos;
use Illuminate\Support\Facades\Auth;

class PvController extends Controller
{
    // Mostrar view Punto de venta
    public function showPV(){
        // Obtener items del menu
        $productos = DB::table('productos')->get();

        return view('pv', 
        ['productos' => $productos]);
    }

    // Registrar ticket
    public function storeTicket(Request $request){

        // Validar
        $request->validate([
            'cantidad' => 'required|array',
            'item_id' => 'required|array',
            'item' => 'required|array',
            'precio' => 'required|array',
        ]);

        //Generar ticket
        $ticket = Tickets::create([
        'Total' => 0, 
        'Empleado' => Auth::user()->nombre,
        ]);

        // Obtener datos del formulario
        $cantidades = $request->input('cantidad');
        $items_id = $request->input('item_id');
        $items = $request->input('item');
        $precios = $request->input('precio');
        
        // Registrar en tabla ticket_detalle
        foreach ($cantidades as $key => $cantidad) {
            $precio = $precios[$key] * $cantidad;

            $ticket->tickets_detalle()->create([
                'Producto' => $items[$key],
                'Producto_id' => $items_id[$key],
                'Cantidad' => $cantidad,
                'Subtotal' => $precio,
                'Estado' => "Comprado",
            ]);
            $ticket->total += $precio;
        
            // Restar cantidad en exhibicion del producto
            $producto = Productos::find($items_id[$key]);
            $producto->En_exhibicion -= $cantidad;
            $producto->save();

        $ticket->total += $precio;
        
        }
        $ticket->save();

        //Obtener el orden_id para pasarlo a showTicket
        $ticket_id = $ticket->id;

        return redirect()->back()->with('success', 'Se ha registrado la compra');
    }
}
