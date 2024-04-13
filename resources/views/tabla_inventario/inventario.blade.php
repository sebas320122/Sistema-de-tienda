@extends('base.menu')
@section('title', 'Disponibilidad')

@section('content')
    <div class="cuadricula">
        <!--Recuadro con tabla-->
        <div class="cuadro">
            <div class="cuadro-header">
                <p>Disponibilidad de productos</p>
            </div>
            <div class="cuadro-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('disponibilidad/agregar')}}" class="btn-agregar">Agregar</a>
                    <input type="text" class="busqueda-productos" placeholder="Buscar" id="filtro">
                </div>
                <div class="campo-tabla">
                    <table id="filtro-table">
                        <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Existencia</th>
                            <th>Capacidad</th>
                            <th>Porcentaje</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{$producto->Producto}}</td>
                                    <td>{{$producto->Existencia}}</td>
                                    <td>{{$producto->Capacidad}}</td>
                                    <td>%{{$producto->Porcentaje}}</td>
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
        <!--Mensaje de alerta-->
                @if ($message = Session::get('success'))
                    <div class="mensaje-alerta">
                        <p>{{$message}}</p>
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="mensaje-alerta">
                        <p>{{$message}}</p>
                    </div>
                @endif
    </div>
    
    <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/tabla.css">
    @endpush
    <!--Agregar script-->
    @push('scripts')
        <script src="/js/busqueda.js"></script>
    @endpush

@endsection