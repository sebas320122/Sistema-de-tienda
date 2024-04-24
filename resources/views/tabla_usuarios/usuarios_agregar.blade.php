@extends('general.base')
@section('title', 'Agregar usuario')

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
        <form action="{{route('store.usuario')}}" method="POST">
            @csrf
            <!--Cuadro con botones-->
            <div class="cuadro">
                <div class="cuadro-header">
                    <p>Agregar usuario</p>
                </div>
                <div class="cuadro-content">
                    <!--Linea de botones-->
                    <div class="opciones-linea">
                        <a href="{{url('usuarios')}}" class="btn btn-regresar">Regresar</a>
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
                        <label class="titulo-dato primero">Nombre:</label>
                        <input class="campo-dato" required type="text" name="nombre">
                        <label class="titulo-dato">Correo:</label>
                        <input class="campo-dato" required type="email" name="email">
                        <label class="titulo-dato">Contraseña:</label>
                        <input class="campo-dato" required type="password" name="password">
                        <label class="titulo-dato">Puesto:</label>
                        <select class="campo-dato" name="puesto">
                            <option value="Usuario">Usuario</option>
                            <option value="Admin">Admin</option>
                        </select>
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