@extends('general.base')
@section('title', 'Punto de venta')

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
                @if (count($errors) > 0)
                    <div class="notificacion">
                        <div class="alineacion">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                            <button class="btn-close">X</button>
                        </div>
                    </div>
                @endif
        <!--Cuadro productos-->
        <div class="cuadro" id="cuadro-1">
            <div class="cuadro-content">
                <input type="text" class="busqueda-items" placeholder="Buscar producto" id="busqueda-items">
                <div class="campo-tabla tabla_productos">
                    <table id="productos-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{$producto->id}}</td>
                                    <td>{{$producto->Descripcion}}</td>
                                    <td>{{$producto->Precio}}</td>
                                    <td><button class="btn-agregar" data-id="{{$producto->id}}" data-item="{{$producto->Descripcion}}" data-precio="{{$producto->Precio}}">+</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
        <!--Cuadro ticket-->
        <div class="cuadro" id="cuadro-2">
            <div class="cuadro-content">
                <!--Formulario de orden-->
                <form id="ticket-form" action="{{route('store.ticket')}}" method="POST">
                    @csrf
                    <div class="campo-tabla tabla_ticket">
                        <table id="ticket-table">
                            <thead>
                                <tr>
                                    <th>Cantidad</th>
                                    <th>ID</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Subtotal</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody id="items-list">
                                <!--Aqui se agregan los items-->
                            </tbody>
                        </table>   
                    </div>
                    <p class="texto-total">Total $</p>
                    <input type="submit" value="Listo" class="btn-listo">
                </form>
                <!--Final del formulario-->
            </div>
        </div>
    </div>

     <!--Agregar estilo-->
    @push('styles')
        <link rel="stylesheet" href="/css/pv.css">
    @endpush
    <!--Agregar script-->
    @push('scripts')
        <script src="/js/apunte.js"></script>
        <script src="/js/busqueda.js"></script>
        <script src="/js/notificacion.js"></script>
    @endpush
   
@endsection