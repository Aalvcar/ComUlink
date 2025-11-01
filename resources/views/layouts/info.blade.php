<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ComUlink')</title>

    <link rel="stylesheet" href="{{ asset('css/estilos_base.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <header>
        <div>
            <a href="{{ route('home') }}"> <img class="logo" src="{{ asset('images/logo_sin_fondo.png') }}" alt="Imagen del logo ComUlink"></a>
        </div>
        <div class="comunity_name_container">
            <h1>ComUlink</h1>
            <h3>Aplicación web para la gestión de tu comunidad</h3>
            <p><a class="btn_ubicacion" href="https://www.linkedin.com/in/antonio-%C3%A1lvarez-c%C3%A1rdenas-4652a5275/" target="_blank">LinkedIn del Autor <i class="bi bi-box-arrow-up-right"></i></a></p>
        </div>
        <div class="info_user">



        </div>

    </header>

    <nav>
        <ul class="navigation_container">
            <li></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div></div>
        <div>
            <p>© Antonio Álvarez Cárdenas</p>
            <p>All rights reserved</p>
        </div>
        <div>
            <ul class="info_container">
                <li><a href="{{ route('home') }}"><span>H</span>ome</a></li>
                <li>@yield('enlace')</li>
            </ul>
        </div>

    </footer>
</body>

</html>