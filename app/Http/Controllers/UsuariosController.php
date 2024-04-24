<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsuariosController extends Controller
{
    // Mostrar vista Inventario
    public function showUsuarios(){

        // Obtener Usuarios
        $usuarios = DB::table('users')->get();

        return view('tabla_usuarios/usuarios', 
        ['usuarios' => $usuarios]);
    }

    // Mostrar vista Agregar Usuario
    public function showAgregarUsuario(){
        return view('tabla_usuarios/usuarios_agregar');
    }

    // Guardar Usuario en BD
    public function storeUsuario(Request $request){

        try{
            // Obtener los datos del formulario
            $nombre = $request->input('nombre');
            $email = $request->input('email');
            $password = $request->input('password');
            $puesto = $request->input('puesto');

            // Crear registro
            User::create([
                'nombre' => $nombre, 
                'email' => $email, 
                'password' => $password,  
                'puesto' => $puesto,  
            ]);
            return redirect()->back()->with('success', 'Se ha agregado un usuario');
        } catch(\Exception $e){
                return redirect()->back()->with('error', 'Hubo un error');
            }
        

    
    }

    // Mostrar vista editar Usuario
    public function showEditarUsuario($id){
        
        // Buscar Usuario en BD
        $usuario = User::find($id);

        return view('tabla_usuarios/usuarios_editar',[
            'usuario' => $usuario
        ]);
    }

    // Actualizar Usuario en BD
    public function updateUsuario(Request $request, $id){

        try{
            // Buscar Usuario en BD
            $usuario = User::find($id);

            // Tomar nuevos valores
            $newNombre = $request->input('nombre');
            $newEmail = $request->input('email');
            $newPassword = $request->input('password');
            $newPuesto = $request->input('puesto');

            // Asginarlos al Usuario
            $usuario->nombre = $newNombre;
            $usuario->email = $newEmail;
            $usuario->password = $newPassword;
            $usuario->puesto = $newPuesto;

            // Realizar actualizacion
            $usuario->save();

            return redirect()->back()->with('success', 'Se ha modificado al usuario');

        } catch(\Exception $e){
            return redirect()->back()->with('error', 'Hubo un error');
        }
              
    }

    // Mostrar vista Info Usuario
    public function showInfoUsuario($id){
        
        // Buscar Usuario en BD
        $usuario = User::find($id);

        return view('tabla_usuarios/usuarios_info',[
            'usuario' => $usuario
        ]);
    }
    
    // Eliminar Usuario de BD
    public function deleteUsuario($id){ 

        try{
            // Buscar Usuario en BD
            $usuario = User::find($id);

            // Eliminar Usuario
            $usuario->delete();
            
            return redirect()->route('show.usuarios')->with('success', 'Usuario eliminado');
        }catch(\Exception $e){
            return redirect()->back()->with('error','Hubo un error');
            }
    }
}
