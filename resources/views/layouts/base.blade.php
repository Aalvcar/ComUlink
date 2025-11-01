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
            <h1>La Calera</h1>
            <h3>Sanlúcar la Mayor - Sevilla</h3>
            <p><a class="btn_ubicacion" href="https://maps.app.goo.gl/1VWAA7PJSa8Z4vYX8" target="_blank">Ver ubicación<i class="bi bi-geo-alt"></i></a></p>
        </div>
        <div class="info_user">
            <div class="avatar_container">
                @if (auth()->user()->role_id == 1)
                <i class="bi bi-house-gear-fill"></i>
                @elseif(auth()->user()->role_id == 2)
                <i class="bi bi-house-check-fill"></i>
                @elseif(auth()->user()->role_id == 3)
                <i class="bi bi-house-check"></i>
                @endif
            </div>

            <div>
                <p>{{ auth()->user()->name }} {{ auth()->user()->surname }}</p>
                <p>{{ auth()->user()->email }}</p>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button class="btn_logout" type="submit">
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </div>

    </header>

    <nav>
        <ul class="navigation_container">
            <li><a class="nav_option" href="">Anuncios</a></li>
            <li><a class="nav_option" href="">Incidencias</a></li>
            <li><a class="nav_option" href="">Reservas</a></li>
            <li><a class="nav_option" href="">Servicios</a></li>
            <li><a class="nav_option" href="">Propuestas</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>
            <li><a href="#"><span>T</span>eléfonos de interés</a></li>
        </div>
        <div>
            <p>© Antonio Álvarez Cárdenas</p>
            <p>All rights reserved</p>
        </div>
        <div>
            <ul class="info_container">
                <li><a href="#"><span>A</span>bout</a></li>
                <li><a href="#"><span>C</span>ontacto</a></li>
            </ul>
        </div>

    </footer>
</body>

</html>