@extends('general.base')
@section('title', 'Informacion de la orden')

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
                <p>Información de la orden</p>
            </div>
            <div class="cuadro-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('reabastecimientos')}}" class="btn btn-regresar">Regresar</a>
                    <!--Formulario-->
                    <form action="{{route('delete.orden',$orden->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="btn btn-eliminar">
                    </form>
                    <a href="{{route('show.editar_orden',$orden->id)}}" class="btn btn-editar">Editar</a>
                </div>
            </div>
        </div>
        <!--Cuadro con campos de datos-->
        <div class="cuadro">
            <div class="cuadro-header">
            </div>
            <div class="cuadro-content">
                <div class="campo-formulario">
                    <label class="titulo-dato primero">Proveedor:</label>
                    <p class="campo-dato">{{$orden->Proveedor}}</p>
                    <label class="titulo-dato">ID de producto:</label>
                    <p class="campo-dato">{{$orden->Producto_id}}</p>
                    <label class="titulo-dato">Descripcion:</label>
                    <p class="campo-dato">{{$orden->Descripcion}}</p>
                    <label class="titulo-dato">Cantidad:</label>
                    <p class="campo-dato">{{$orden->Cantidad}}</p>
                    <label class="titulo-dato">Costo:</label>
                    <p class="campo-dato">{{$orden->Costo}}</p>
                    <label class="titulo-dato">Estado:</label>
                    <p class="campo-dato">{{$orden->Estado}}</p>
                    <label class="titulo-dato">Fecha de creacion:</label>
                    <p class="campo-dato">{{$orden->created_at}}</p>
                    <label class="titulo-dato">Fecha estimada:</label>
                    <p class="campo-dato">{{$orden->Fecha_estimada}}</p>
                    <label class="titulo-dato">Fecha de entrega:</label>
                    <p class="campo-dato">{{$orden->Fecha_entrega}}</p>
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