<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reabastecimientos;
use App\Models\Productos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ReabastecimientosController extends Controller
{
    // Mostrar vista Reabastecimientos
    public function showReabastecimientos(){

        // Obtener ordenes
        $ordenes = DB::table('reabastecimientos')
        ->where('Estado', '<>', 'Entregada')
        ->latest()
        ->get();

        return view('tabla_reabastecimientos/reabastecimientos', 
        ['ordenes' => $ordenes]);
    }

    // Mostrar vista de ordenes entregadas
    public function showEntregadas(){

        // Obtener ordenes
        $ordenes = DB::table('reabastecimientos')
        ->where('Estado', 'Entregada')
        ->latest()
        ->get();

        return view('tabla_reabastecimientos/entregadas', 
        ['ordenes' => $ordenes]);
    }

    // Mostrar vista Agregar orden
    public function showAgregarOrden(){
        return view('tabla_reabastecimientos/reabastecimientos_agregar');
    }

    // Guardar orden en BD
    public function storeOrden(Request $request){
        // Comprobar atorizacion
        if (! Gate::allows('tablaReabastecimientos',Auth::user())) {
            return redirect()->back()->with('error','No tienes permitido agregar ordenes');
        }

        try{

            // Comprobar existencia de producto en registros
            try{
                $producto_id = $request->input('producto_id');
                $producto = Productos::findOrFail($producto_id);
            } catch (\Exception $e){
                return redirect()->back()->with('error', 'Error, ingrese una producto valido');
                }
            
            // Obtener los datos del formulario
            $proveedor = $request->input('proveedor');
            $descripcion = $producto->Descripcion;
            $cantidad = $request->input('cantidad');
            $costo = $request->input('costo');
            $estado = $request->input('estado');
            $fecha_estimada = $request->input('fecha_estimada');

            // Crear registro
            Reabastecimientos::create([
                'Proveedor' => $proveedor, 
                'Producto_id' => $producto_id, 
                'Descripcion' => $descripcion,  
                'Cantidad' => $cantidad,  
                'Costo' => $costo, 
                'Estado' => $estado,
                'Fecha_estimada' => $fecha_estimada,
            ]);
        
            return redirect()->back()->with('success', 'Se ha agregado la orden de reabastecimiento');
        } catch(\Exception $e){
                return redirect()->back()->with('error', 'Hubo un error');
            }
        
    }

    // Mostrar vista editar orden
    public function showEditarOrden($id){
        
        // Buscar orden en BD
        $orden = Reabastecimientos::find($id);

        return view('tabla_reabastecimientos/reabastecimientos_editar',[
            'orden' => $orden
        ]);
    }

    // Actualizar orden en BD
    public function updateOrden(Request $request, $id){
        // Comprobar atorizacion
        if (! Gate::allows('tablaReabastecimientos',Auth::user())) {
            return redirect()->back()->with('error','No tienes permitido editar ordenes');
        }

        try{
            // Buscar orden en BD
            $orden = Reabastecimientos::find($id);

            // Comprobar existencia de producto en registros
            try{
                $newProducto_id = $request->input('producto_id');
                $producto = Productos::findOrFail($newProducto_id);
            } catch (\Exception $e){
                return redirect()->back()->with('error', 'Error, ingrese una producto valido');
            }

            // Tomar nuevos valores
            $newProveedor = $request->input('proveedor');
            $newDescripcion = $producto->Descripcion;
            $newCantidad = $request->input('cantidad');
            $newCosto = $request->input('costo');
            $newEstado = $request->input('estado');
            $newFecha_estimada = $request->input('fecha_estimada');
            $newFecha_entrega = $request->input('fecha_entrega');

            // Obtener datos anteriores
            $estadoAnterior=$orden->Estado;
            $cantidadAnterior=$orden->Cantidad;
            $productoAnterior = Productos::findOrFail($orden->Producto_id);

            // Calcular ingreso de producto a inventario
            if ($estadoAnterior == 'Entregada' && $newEstado == 'Entregada'){
                if ($productoAnterior->id == $newProducto_id){
                    $producto->En_almacen -= $cantidadAnterior;
                    $producto->save();
                    $producto->En_almacen += $newCantidad;
                    $producto->save();
                } else {
                    $productoAnterior->En_almacen -= $cantidadAnterior;
                    $productoAnterior->save();
                    $producto->En_almacen += $newCantidad;
                    $producto->save();
                }
                
            }elseif ($estadoAnterior != 'Entregada' && $newEstado == 'Entregada') {
                $producto->En_almacen += $newCantidad;
                $producto->save();
            }elseif ($estadoAnterior == 'Entregada' && $newEstado != 'Entregada') {
                $productoAnterior->En_almacen -= $cantidadAnterior;
                $productoAnterior->save();
            }
            
            // Asginarlos a la orden
            $orden->Proveedor = $newProveedor;
            $orden->Producto_id = $newProducto_id;
            $orden->Descripcion = $newDescripcion;
            $orden->Cantidad = $newCantidad;
            $orden->Costo = $newCosto;
            $orden->Estado = $newEstado;
            $orden->Fecha_estimada = $newFecha_estimada;
            $orden->Fecha_entrega = $newFecha_entrega;

            // Realizar actualizacion
            $orden->save();

            return redirect()->back()->with('success', 'Se ha editado la orden de reabastecimiento');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Hubo un error');
        }
              
    }

    // Mostrar vista Info producto
    public function showInfoOrden($id){
        
        // Buscar orden en BD
        $orden = Reabastecimientos::find($id);

        return view('tabla_reabastecimientos/reabastecimientos_info',[
            'orden' => $orden
        ]);
    }
    
    // Eliminar orden de BD
    public function deleteOrden($id){
        // Comprobar atorizacion
        if (! Gate::allows('tablaReabastecimientos',Auth::user())) {
            return redirect()->back()->with('error','No tienes permitido eliminar ordenes');
        } 

        try{
            // Buscar orden en BD
            $orden = Reabastecimientos::find($id);

            // Eliminar orden
            $orden->delete();
            
            return redirect()->route('show.reabastecimientos')->with('success', 'Orden eliminada');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Hubo un error');
            }
    }
}
