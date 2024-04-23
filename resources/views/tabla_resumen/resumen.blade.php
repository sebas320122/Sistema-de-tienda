@extends('general.base')
@section('title', 'Resumen')

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
                <p>Resumen</p>
            </div>
            <div class="cuadro-content">
                <p class="texto-total">Ganancias: ${{$gananciasHoy}}</p>
                <!--Linea de botones-->
                <div class="opciones-linea">
                    <a href="{{url('resumen')}}" class="btn btn-regresar">Hoy</a>
                    <a href="{{url('resumen/semana')}}" class="btn btn-vista">Semana</a>
                </div>
            </div>
        </div>
        <!--Cuadro con ventas-->
        <div class="cuadro">
            <div class="cuadro-header">
                <p class="titulo-cuadro">Ventas</p>
            </div>
            <div class="cuadro-content">
                <p class="texto-total">Total: ${{$ventasHoyTotal}}</p>
                <div class="campo-tabla">
                    <table>
                        <thead>
                        <tr>
                            <th>Empleado</th>
                            <th>Total</th>
                            <th>Fecha</th>                         
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($ventasHoy as $ventaHoy)
                                <tr>
                                    <td>{{$ventaHoy->Empleado}}</td>
                                    <td>{{$ventaHoy->Total}}</td>
                                    <td>{{$ventaHoy->created_at}}</td>
                                </tr>
                            @endforeach   
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
        <!--Cuadro con gastos-->
        <div class="cuadro">
            <div class="cuadro-header">
                <p class="titulo-cuadro">Gastos</p>
            </div>
            <div class="cuadro-content">
                <p class="texto-total">Total: ${{$gastosHoyTotal}}</p>
                <div class="campo-tabla">
                    <table id="busqueda-table">
                        <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th>Costo</th>
                            <th>Fecha</th>                         
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($gastosHoy as $gastoHoy)
                                <tr>
                                    <td>{{$gastoHoy->Descripcion}}</td>
                                    <td>{{$gastoHoy->Costo}}</td>
                                    <td>{{$gastoHoy->created_at}}</td>
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
        <script src="/js/notificacion.js"></script>
    @endpush

@endsection