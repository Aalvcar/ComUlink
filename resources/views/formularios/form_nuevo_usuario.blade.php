@extends('layouts.info')

@section('title', 'ComUlink - Nuevo usuario')
@section('estilo')
<link rel="stylesheet" href="{{ asset('css/estilos_form.css') }}">
<script src="{{ asset('js/usuario.js') }}"></script>
@endsection


@section('content')
<h2>Creación de nuevo vecino</h2>
<div class="main_container">
    <div class="info_main_container">

        <form id="formulario" action="" method="POST" class="form_vecino">
            @csrf

            <div class="form_columns">
                <fieldset>
                    <legend>Datos de la Cuenta</legend>
                    <div class="form_group">
                        <label for="email">Correo electrónico:</label>
                        <input id="email" name="email" type="email" placeholder="usuario@ejemplo.es" required>
                    </div>
                    <div class="form_group">
                        <label for="password">Contraseña:</label>
                        <input id="password" name="password" type="password" minlength="8" maxlength="16" required><button type="button" id="eye"><i class="bi bi-eye"></i></button>
                    </div>
                    <div class="form_group">
                        <label for="password2">Repite la contraseña:</label>
                        <input id="password2" name="password2" type="password" minlength="8" maxlength="16" required>
                    </div>
                    <div class="form_group">
                        <label for="role_id">Soy:</label>
                        <select id="role_id" name="role_id" required>
                            <option value="">Selecciona tu rol</option>
                            <option value="2">Propietario</option>
                            <option value="3">Inquilino</option>
                        </select>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Información Personal</legend>
                    <div class="form_group">
                        <label for="name">Nombre:</label>
                        <input id="name" name="name" type="text" required>
                    </div>
                    <div class="form_group">
                        <label for="surname">Apellidos:</label>
                        <input id="surname" name="surname" type="text" required>
                    </div>
                    <div class="form_group">
                        <label for="address">Dirección:</label>
                        <input id="address" name="address" type="text" required>
                    </div>
                    <div class="form_group">
                        <label for="phone">Teléfono:</label>
                        <input id="phone" name="phone" type="tel" pattern="[0-9]{9}" maxlength="9" placeholder="123456789" required>
                    </div>
                    <div class="form_group">
                        <label for="birth_date">Fecha de nacimiento:</label>
                        <input id="birth_date" name="birth_date" type="date" required>
                    </div>
                </fieldset>
            </div>

            <div class="form_buttons">
                <button id="enviar" type="submit" class="btn_submit">Crear</button>
                <button type="reset" class="btn_reset">Borrar</button>
            </div>
        </form>
    </div>


    <div class="imgen_form_container"> </div>
</div>

@endsection

@section('enlace')
<a style="margin-right: 10px;" href=" {{ route ('about') }}"><span>A</span>viso legal</a>
<a href=" {{ route ('contacto') }}"><span>C</span>ontacto</a>
@endsection