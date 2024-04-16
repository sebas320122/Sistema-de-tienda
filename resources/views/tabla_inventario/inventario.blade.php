@extends('general.base')
@section('title', 'Disponibilidad')

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
        <!---Cuadro con botones-->
        <div class="cuadro">
            <div class="cuadro-header">
                <p>Inventario</p>
            </div>
            <div class="cuadro-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('inventario/agregar')}}" class="btn-agregar">Agregar</a>
                    <input type="text" class="busqueda-productos" placeholder="Buscar" id="busqueda">
                </div>
            </div>
        </div>
        <!--Cuadro con tabla-->
        <div class="cuadro">
            <div class="cuadro-header">
            </div>
            <div class="cuadro-content">
                <div class="campo-tabla">
                    <table id="busqueda-table">
                        <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Categoria</th>
                            <th>En exhibicion</th>
                            <th>En almacen</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{$producto->Descripcion}}</td>
                                    <td>{{$producto->Categoria}}</td>
                                    <td>{{$producto->En_exhibicion}}</td>
                                    <td>{{$producto->En_almacen}}</td>
                                    <td>{{$producto->Precio}}</td>
                                    <td>
                                        <a href="{{route('show.info_producto',$producto->id)}}">
                                            <button class="btn-editar">
                                                Ver
                                            </button>
                                        </a>
                                    </td> 
                                </tr>
                            @endforeach   
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </div>
    
    <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/tabla.css">
    @endpush
    <!--Agregar script-->
    @push('scripts')
        <script src="/js/busqueda.js"></script>
        <script src="/js/notificacion.js"></script>
    @endpush

@endsection