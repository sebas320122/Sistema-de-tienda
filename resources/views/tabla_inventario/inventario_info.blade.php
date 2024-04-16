@extends('general.base')
@section('title', 'Informacion del producto')

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
                <p>Información del producto</p>
            </div>
            <div class="cuadro-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('inventario')}}" class="btn btn-regresar">Regresar</a>
                    <!--Formulario-->
                    <form action="{{route('delete.producto',$producto->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="btn btn-eliminar">
                    </form>
                    <a href="{{route('show.editar_producto',$producto->id)}}" class="btn btn-editar">Editar</a>
                </div>
            </div>
        </div>
        <!--Cuadro con campos de datos-->
        <div class="cuadro">
            <div class="cuadro-header">
            </div>
            <div class="cuadro-content">
                <div class="campo-formulario">
                    <label class="titulo-dato primero">Descripcion:</label>
                    <p class="campo-dato">{{$producto->Descripcion}}</p>
                    <label class="titulo-dato">En exhibicion:</label>
                    <p class="campo-dato">{{$producto->En_exhibicion}}</p>
                    <label class="titulo-dato">En almacen:</label>
                    <p class="campo-dato">{{$producto->En_almacen}}</p>
                    <label class="titulo-dato">Categoria:</label>
                    <p class="campo-dato">{{$producto->Categoria}}</p>
                    <label class="titulo-dato">Precio:</label>
                    <p class="campo-dato">{{$producto->Precio}}</p>
                    <label class="titulo-dato">Fecha de creacion:</label>
                    <p class="campo-dato">{{$producto->created_at}}</p>
                    <label class="titulo-dato">Ultima edicion:</label>
                    <p class="campo-dato">{{$producto->Ultima_edicion}}</p>
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