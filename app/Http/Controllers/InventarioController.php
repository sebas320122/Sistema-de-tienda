<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Productos;

class InventarioController extends Controller
{
    // Mostrar vista Inventario
    public function showInventario(){

        // Obtener productos
        $productos = DB::table('productos')->get();

        return view('tabla_inventario/inventario', 
        ['productos' => $productos]);
    }

    // Mostrar vista Agregar producto
    public function showAgregarProducto(){
        return view('tabla_inventario/inventario_agregar');
    }

    // Guardar producto en BD
    public function storeProducto(Request $request){

        try{
            // Obtener los datos del formulario
            $descripcion = $request->input('descripcion');
            $en_exhibicion = $request->input('en_exhibicion');
            $en_almacen = $request->input('en_almacen');
            $categoria = $request->input('categoria');
            $precio = $request->input('precio');

            // Crear registro
            Productos::create([
                'Descripcion' => $descripcion, 
                'En_exhibicion' => $en_exhibicion, 
                'En_almacen' => $en_almacen,  
                'Categoria' => $categoria,  
                'Precio' => $precio, 
            ]);
            return redirect()->back()->with('success', 'Se ha agregado el producto');
        } catch(\Exception $e){
                return redirect()->back()->with('error', 'Hubo un error');
            }
        

    
    }

    // Mostrar vista editar producto
    public function showEditarProducto($id){
        
        // Buscar producto en BD
        $producto = Productos::find($id);

        return view('tabla_inventario/inventario_editar',[
            'producto' => $producto
        ]);
    }

    // Actualizar producto en BD
    public function updateProducto(Request $request, $id){

        try{
            // Buscar producto en BD
            $producto = Productos::find($id);

            // Tomar nuevos valores
            $newDescripcion = $request->input('descripcion');
            $newEn_exhibicion = $request->input('en_exhibicion');
            $newEn_almacen = $request->input('en_almacen');
            $newCategoria = $request->input('categoria');
            $newPrecio = $request->input('precio');

            // Asginarlos al producto
            $producto->Descripcion = $newDescripcion;
            $producto->En_exhibicion = $newEn_exhibicion;
            $producto->En_almacen = $newEn_almacen;
            $producto->Categoria = $newCategoria;
            $producto->Precio = $newPrecio;
            $producto->Ultima_edicion = now();

            // Realizar actualizacion
            $producto->save();

            return redirect()->back()->with('success', 'Seha modificado el producto');

        } catch(\Exception $e){
            return redirect()->back()->with('error', 'Hubo un error');
        }
              
    }

    // Mostrar vista Info producto
    public function showInfoProducto($id){
        
        // Buscar producto en BD
        $producto = Productos::find($id);

        return view('tabla_inventario/inventario_info',[
            'producto' => $producto
        ]);
    }
    
    // Eliminar producto de BD
    public function deleteProducto($id){ 

        try{
            // Buscar producto en BD
            $producto = Productos::find($id);

            // Eliminar producto
            $producto->delete();
            
            return redirect()->route('show.inventario')->with('success', 'Producto eliminado');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Hubo un error');
            }
    }
}
