@extends('general.base')
@section('title', 'Editar orden')

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
        <!--Formulario-->
        <form action="{{route('update.orden',$orden->id)}}" method="POST">
            @csrf
            @method('PUT')
            <!--Cuadro con botones-->
            <div class="cuadro">
                <div class="cuadro-header">
                    <p>Editar orden de reabastecimiento</p>
                </div>
                <div class="cuadro-content">
                    <!--Linea de botones-->
                    <div class="opciones-linea">
                        <a href="{{route('show.info_orden',$orden->id)}}" class="btn btn-regresar">Regresar</a>
                        <input type="submit" value="Editar" class="btn btn-editar">
                    </div>
                </div>
            </div>
            <!--Cuadro con campo de datos-->
            <div class="cuadro">
                <div class="cuadro-header">
                </div>
                <div class="cuadro-content">
                    <div class="campo-formulario">
                        <label class="titulo-dato primero">Proveedor:</label>
                        <input class="campo-dato" required type="text" value="{{$orden->Proveedor}}" name="proveedor">
                        <label class="titulo-dato">ID de producto:</label>
                        <input class="campo-dato" required type="number" min="0" value="{{$orden->Producto_id}}" name="producto_id">
                        <label class="titulo-dato">Cantidad:</label>
                        <input class="campo-dato" required type="number" min="0" value="{{$orden->Cantidad}}" name="cantidad">
                        <label class="titulo-dato">Costo:</label>
                        <input class="campo-dato" required type="number" min="0" value="{{$orden->Costo}}" name="costo">
                        <label class="titulo-dato">Estado:</label>
                        <select class="campo-dato" name="estado">
                            <option value="Anotada">Anotada</option>
                            <option value="En curso">En curso</option>
                            <option value="Entregada">Entregada</option>
                        </select>
                        <label class="titulo-dato">Fecha estimada:</label>
                        <input class="campo-dato" required type="date" value="{{$orden->Fecha_estimada}}" name="fecha_estimada">
                        <label class="titulo-dato">Fecha de entrega:</label>
                        <input class="campo-dato" type="date" value="{{$orden->Fecha_entrega}}" name="fecha_entrega">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/tabla_agregar.css">
    @endpush
    <!--Agregar script-->
    @push('scripts')
        <script src="/js/notificacion.js"></script>
    @endpush
@endsection