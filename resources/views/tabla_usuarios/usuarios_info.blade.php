@extends('general.base')
@section('title', 'Informacion del usuario')

@section('content')
    <div class="cuadricula">
        <!--Notificacion-->
        @if ($message = Session::get('success'))
            <div class="notificacion exito">
                <div class="alineacion">
                    <p>{{$message}}</p>
                    <button class="btn-close">X</button>
                </div>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="notificacion">
                <div class="alineacion">
                    <p>{{$message}}</p>
                    <button class="btn-close">X</button>
                </div>
            </div>
        @endif
        <!--Cuadro con botones-->
        <div class="cuadro">
            <div class="cuadro-header">
                <p>Información del usuario</p>
            </div>
            <div class="cuadro-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('usuarios')}}" class="btn btn-regresar">Regresar</a>
                    <!--Formulario-->
                    <form action="{{route('delete.usuario',$usuario->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="btn btn-eliminar">
                    </form>
                    <a href="{{route('show.editar_usuario',$usuario->id)}}" class="btn btn-editar">Editar</a>
                </div>
            </div>
        </div>
        <!--Cuadro con campos de datos-->
        <div class="cuadro">
            <div class="cuadro-header">
            </div>
            <div class="cuadro-content">
                <div class="campo-formulario">
                    <label class="titulo-dato primero">ID de usuario:</label>
                    <p class="campo-dato">{{$usuario->id}}</p>
                    <label class="titulo-dato primero">Nombre:</label>
                    <p class="campo-dato">{{$usuario->nombre}}</p>
                    <label class="titulo-dato">Correo:</label>
                    <p class="campo-dato">{{$usuario->email}}</p>
                    <label class="titulo-dato">Puesto:</label>
                    <p class="campo-dato">{{$usuario->puesto}}</p>
                    <label class="titulo-dato">Fecha de creacion:</label>
                    <p class="campo-dato">{{$usuario->created_at}}</p>
                    <label class="titulo-dato">Ultima actualizacion:</label>
                    <p class="campo-dato">{{$usuario->updated_at}}</p>
                </div> 
            </div>
        </div>
    </div>
    <!--Agregar estilo--> 
    @push('styles')
        <link rel="stylesheet" href="/css/tabla_editar.css">
    @endpush
    <!--Agregar script-->
    @push('scripts')
        <script src="/js/notificacion.js"></script>
    @endpush
@endsection