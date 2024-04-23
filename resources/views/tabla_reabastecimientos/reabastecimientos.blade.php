@extends('general.base')
@section('title', 'Reabastecimientos')

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
                <p>Ordenes de reabastecimiento</p>
            </div>
            <div class="cuadro-content">
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('reabastecimientos/agregar')}}" class="btn btn-agregar">Agregar</a>
                    <input type="text" class="busqueda-productos" placeholder="Buscar" id="busqueda">
                    <a href="{{url('reabastecimientos/entregadas')}}" class="btn btn-vista">Entregadas</a>
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
                            <th>Proveedor</th>
                            <th>Descripcion</th>
                            <th>Estado</th>                         
                            <th>Fecha estimada</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($ordenes as $orden)
                                <tr>
                                    <td>{{$orden->Proveedor}}</td>
                                    <td>{{$orden->Descripcion}}</td>
                                    <td>{{$orden->Estado}}</td>
                                    <td>{{$orden->Fecha_estimada}}</td>
                                    <td>
                                        <a href="{{route('show.info_orden',$orden->id)}}">
                                            <button class="btn-ver">
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