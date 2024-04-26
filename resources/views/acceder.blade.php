<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceder</title><!--seccion de titulo-->
    <link rel="stylesheet" href="/css/acceder.css">
    <!--Logo de pagina-->
    <link rel="icon" type="image/x-icon" href="{{asset('varotienda.ico')}}">
    <!-- Iconos -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<body>
  <!--Contenido-->
  <section class="contenido">
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
        <!--Cuadro con logo-->
        <div class="cuadro logo-tienda">
            <div class="cuadro-header">
            </div>
            <div class="cuadro-content">
                <div class="campo-formulario con-logo">
                    <!--Seccion del logo-->
                    <div class="contenedor-logo">
                        <div class="marco-logo">
                            <img src="{{asset('varotienda.png')}}" alt="cat" class="logo">
                        </div>
                        <div class="logo-titulo">VaroTienda</div>
                    </div>
                </div>
            </div>
        </div>
        <!--Cuadro con formulario-->
        <div class="cuadro formulario">
            <div class="cuadro-header">
            <p>Iniciar sesion</p>
            </div>
            <div class="cuadro-content">
                <!--Formulario route('iniciar.empleado')-->
                <form action="#" method="POST">
                    @csrf
                    <div class="campo-formulario">
                        <label class="titulo-dato">Correo:</label>
                        <input class="campo-dato" required type="email" name="email">
                        <label class="titulo-dato">Contraseña:</label>
                        <input class="campo-dato" required type="password" name="password">
                    </div>
                    <div class="opciones-linea inferior">
                        <input type="submit" value="Agregar" class="btn btn-iniciar">
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>

</body>
</html>