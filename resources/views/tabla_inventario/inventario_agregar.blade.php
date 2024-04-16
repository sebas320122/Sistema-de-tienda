@extends('general.base')
@section('title', 'Agregar producto')

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
        <form action="{{route('store.producto')}}" method="POST">
            @csrf
            <!--Cuadro con botones-->
            <div class="cuadro">
                <div class="cuadro-header">
                    <p>Agregar producto</p>
                </div>
                <div class="cuadro-content">
                    <!--Linea de botones-->
                    <div class="opciones-linea">
                        <a href="{{url('inventario')}}" class="btn btn-regresar">Regresar</a>
                        <input type="submit" value="Agregar" class="btn btn-agregar">
                    </div>
                </div>
            </div>
            <!--Cuadro con campo de datos-->
            <div class="cuadro">
                <div class="cuadro-header">
                </div>
                <div class="cuadro-content">
                    <div class="campo-formulario">
                        <label class="titulo-dato primero">Descripcion:</label>
                        <input class="campo-dato" required type="text" name="descripcion">
                        <label class="titulo-dato">En exhibicion:</label>
                        <input class="campo-dato" required type="number" min="0" name="en_exhibicion">
                        <label class="titulo-dato">En almacen:</label>
                        <input class="campo-dato" required type="number" min="0" name="en_almacen">
                        <label class="titulo-dato">Categoria:</label>
                        <input class="campo-dato" required type="text" name="categoria">
                        <label class="titulo-dato">Precio:</label>
                        <input class="campo-dato" required type="number" min="0" name="precio">
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