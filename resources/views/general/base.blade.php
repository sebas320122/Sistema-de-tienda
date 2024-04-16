<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title><!--seccion de titulo-->
    <link rel="stylesheet" href="/css/general/base.css">
    @stack('styles')<!--agrupacion de estilos-->
    <!--Logo de pagina-->
    <link rel="icon" type="image/x-icon" href="{{asset('varotienda.ico')}}">
    <!-- Iconos -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    @stack('head-elements')<!--agrupacion de scripts-->
</head>
<body>
  <!--Barra de navegacion-->
  <div class="barra">
    <div class="barra-logo">
        <div class="marco-logo">
            <img src="{{asset('varotienda.png')}}" alt="cat" class="logo">
        </div>
        <div class="logo-titulo">VaroTienda</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="barra-opciones">
      <li>
        <a href="{{url('pv')}}">
          <i class='bx bxs-calculator'></i>
          <span class="opcion_texto">Punto de venta</span>
        </a>
         <span class="tooltip">Punto de venta</span>
      </li>
      <li>
        <a href="{{url('inventario')}}">
          <i class='bx bxs-box'></i>
          <span class="opcion_texto">Inventario</span>
        </a>
         <span class="tooltip">Inventario</span>
      </li>
      <li>
        <a href="{{url('reabastecimientos')}}">
          <i class='bx bxs-notepad'></i>
          <span class="opcion_texto">Reabastecimientos</span>
        </a>
         <span class="tooltip">Reabastecimientos</span>
      </li>
      <li>
        <a href="{{url('resumen')}}">
          <i class='bx bxs-dollar-circle'></i>
          <span class="opcion_texto">Resumen</span>
        </a>
         <span class="tooltip">Resumen</span>
      </li>
      <li>
        <a href="{{url('usuarios')}}">
          <i class='bx bxs-cog'></i>
          <span class="opcion_texto">Usuarios</span>
        </a>
         <span class="tooltip">Usuarios</span>
      </li>
      <li>
      <li>
        <a href="#">
          <i class='bx bxs-user-circle'></i>
          <span class="opcion_texto">Mi cuenta</span>
        </a>
         <span class="tooltip">Nombre: Sebastian Garcia Lizarraga</span>
      </li>

    </ul>
  </div>
  <!--Contenido-->
  <section class="contenido">
    @yield('content') <!--seccion contenido-->
  </section>

  <!--Scripts de body-->  
  <script src="/js/barra.js"></script>
  @stack('scripts') <!--agrupacion de scripts-->

</body>


</html>