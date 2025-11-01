<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComUlink</title>

    <link rel="stylesheet" href="{{ asset('css/estilos_home.css') }}">

</head>

<body>
    <header> </header>
    <nav>
        <ul>
            <li><a href="{{ route('about') }}"><span>A</span>viso legal</a></li>
            <li><a href="{{ route('contacto') }}"><span>C</span>ontacto</a></li>
        </ul>
    </nav>
    <main class="img_container">
    </main>
    <aside>
        <div>
            <img class="logo" src="/images/logo.jpeg" alt="Imagen del logo ComUlink">
        </div>

        <form class="form_area" method="POST" action="{{ route('login') }}">
            @csrf
            <h5>Bienvenido a la web de gestion de tu comunidad.<br><br> @auth Estás autenticado, puedes entrar.@endauth</h5>

            @guest
            <h5>Introduce tus datos:</h5>
            <label for="email"></label>
            <input name="email" type="email" placeholder="usuario" required>
            <label for="password"></label>
            <input name="password" type="password" minlength="8" maxlength="16" placeholder="contraseña" required>
            <button  type="submit">Entrar</button>
            <h6>Si no estás registrado haz clic <a href="{{ route('form-usuario') }}">aquí.</a></p>
                @endguest
                @auth
                <a class="btn_entrar" href="{{ route('anuncios') }}">Entrar</a>
                @endauth
        </form><br>

        @error('email')
        <div class="error">{{ $message }}</div>
        @enderror

    </aside>

    <footer>
        <p>© Antonio Álvarez Cárdenas</p>
        <p>All rights reserved</p>

    </footer>

</body>

</html>