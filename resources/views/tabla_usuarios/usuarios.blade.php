@extends('general.base')
@section('title', 'Usuarios')

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
                    <a href="{{url('usuarios/agregar')}}" class="btn btn-agregar">Agregar</a>
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
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Puesto</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->nombre}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>{{$usuario->puesto}}</td>
                                    <td>
                                        <a href="{{route('show.info_usuario',$usuario->id)}}">
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